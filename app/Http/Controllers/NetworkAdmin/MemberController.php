<?php

namespace App\Http\Controllers\NetworkAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Network;
use App\Models\User;
use App\Models\NetworkMember;
use App\Mail\SendUserCredential;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $network = Network::with('members')->where('user_id', auth()->user()->id)->firstOrFail();

        return view('admin.members.index', compact('network'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($networkId, $memberId)
    {
        NetworkMember::where([
            'user_id' => $memberId,
            'network_id' => $networkId
        ])->first()->delete();

        return redirect()->back()->with('success', 'Successfully removed the member!');
    }

    public function import(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,txt'
        ]);

        $file = fopen($request->file, "r");

        fgetcsv($file, 10000, ",");
        while ( ( $getData = fgetcsv( $file, 10000, "," ) ) !== FALSE ) {
            $name = $getData[0] . ' ' . $getData[1];
            $email = $getData[2];
            $password = '1234';

            if ( !filter_var($email, FILTER_VALIDATE_EMAIL) || !$email )
                continue;

            $exist = User::where('email', $email)->first();
            
            if ($exist) {
                $user_id = $exist->id;
            }
            else {
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'role' => 'member',
                    'is_registered' => 0
                ]);

                $user_id = $user->id;

                Mail::to($email)->send(new SendUserCredential($name, $password));
            }

            $member = NetworkMember::where([
                'user_id' => $user_id,
                'network_id' => $id
            ])->first();

            if (!$member) {
                NetworkMember::create([
                    'user_id' => $user_id,
                    'network_id' => $id
                ]);
            }
        }

        fclose($file);

        return redirect()->back()->with('success', 'Member has been imported successfully!');
    }
}
