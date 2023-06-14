<?php

namespace App\Http\Controllers\NetworkAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Network;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $network = Network::where('user_id', auth()->user()->id)->firstOrFail();

        return view('admin.settings.index', compact('network'));
    }

    public function save(Request $request)
    {
        $network = Network::where('user_id', auth()->user()->id)->first();
        
        $selectedFile = $request->selectedFile;
        
        $request->validate([
            'logo' => 'image|nullable',
            'description' => 'nullable',
            'primary_color' => 'nullable',
            'secondary_color' => 'nullable',
            'tertiary_color' => 'nullable'
        ]);

        $data = [
            'logo' => $request->logo ?? $selectedFile,
            'description' => $request->description,
            'primary_color' => $request->primary_color,
            'secondary_color' => $request->secondary_color,
            'tertiary_color' => $request->tertiary_color
        ];

        $updated = Network::find($network->id)->update($data);

        if ($updated) {
            if ($request->logo) {
                $photo = time() . '.' . $request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('images/networks/' . $updated . '/logo/'), $photo);
            
                Network::find($id)->update(['logo' => $photo]);
            }

            return redirect()->back()->with('success', 'Settings has been saved successfully!');
        }
        else {
            return redirect()->back()->with('error', 'Oops! Something went wrong.');
        }
    }
}
