<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Meeting;
use App\Models\Network;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersWeekly = array();
        $meetingsWeekly = array();
        $monthlyData = array();

        $usersPerDayThisMonth = User::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->groupBy('date')
        ->get();
        $usersPerDayThisWeek = User::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->groupBy('date')
        ->get();
        $usersCountThisWeek = User::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $usersCountThisMonth = User::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
        $usersPerDayLastWeek = User::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
        ->groupBy('date')
        ->get();

        $meetingsPerDayThisMonth = Network::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])
        ->groupBy('date')
        ->get();
        $meetingsPerDayThisWeek = Network::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->groupBy('date')
        ->get();
        $meetingsCountThisWeek = Network::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $meetingsCountThisMonth = Network::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
        $meetingsPerDayLastWeek = Network::selectRaw('count(*) as count, date(created_at) as date')
        ->whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
        ->groupBy('date')
        ->get();

        $daysOfWeek = iterator_to_array(CarbonPeriod::create(Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek())
        ->map(function (Carbon $date) {
            return $date->format('l');
        }));
        $daysOfMonth = iterator_to_array(CarbonPeriod::create(Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth())
        ->map(function (Carbon $date) {
            return $date->day;
        }));

        $numberOfDaysLastWeek = Carbon::now()->diffInDays(Carbon::now()->subWeek());
        $numberOfDaysLastMonth = Carbon::now()->diffInDays(Carbon::now()->subMonth());

        $averageUsersPerWeek = User::whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])->count() / $numberOfDaysLastWeek;
        $averageUsersPerMonth = User::whereBetween('created_at', [Carbon::now()->subMonth(), Carbon::now()])->count() / $numberOfDaysLastMonth;
        $averageMeetingsPerWeek = Network::whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])->count() / $numberOfDaysLastWeek;
        $averageMeetingsPerMonth = Network::whereBetween('created_at', [Carbon::now()->subMonth(), Carbon::now()])->count() / $numberOfDaysLastMonth;

        $drawUsersThisWeek = $this->drawLine($usersPerDayThisWeek, 'blue');
        $drawUsersLastWeek = $this->drawLine($usersPerDayLastWeek, 'gray');
        $drawUsersThisMonth = $this->drawLine($usersPerDayThisMonth, 'blue');
        $drawMeetingsThisWeek = $this->drawLine($meetingsPerDayThisWeek, 'blue');
        $drawMeetingsLastWeek = $this->drawLine($meetingsPerDayLastWeek, 'gray');
        $drawMeetingsThisMonth = $this->drawLine($meetingsPerDayThisMonth, 'gray');

        $usersWeekly[] = $drawUsersThisWeek;
        $usersWeekly[] = $drawUsersLastWeek;
        $meetingsWeekly[] = $drawMeetingsThisWeek;
        $meetingsWeekly[] = $drawMeetingsLastWeek;
        $monthlyData[] = $drawUsersThisMonth;
        $monthlyData[] = $drawMeetingsThisMonth;

        $usersWeekly = json_encode($usersWeekly);
        $meetingsWeekly = json_encode($meetingsWeekly);
        $daysOfWeek = json_encode($daysOfWeek);
        $daysOfMonth = json_encode($daysOfMonth);
        $monthlyData = json_encode($monthlyData);

        $users = User::all();
        $sumLifetime = 0;
        foreach ($users as $user) {
            $sumLifetime += $user->created_at->diffInDays(Carbon::now());
        }
        $averageLifetime = $sumLifetime / $users->count();

        return view('home', compact(
            'monthlyData',
            'daysOfWeek',
            'daysOfMonth',
            'meetingsWeekly',
            'meetingsCountThisWeek',
            'meetingsCountThisMonth',
            'usersWeekly',
            'usersCountThisWeek',
            'usersCountThisMonth',
            'averageUsersPerWeek',
            'averageUsersPerMonth',
            'averageMeetingsPerWeek',
            'averageMeetingsPerMonth',
            'averageLifetime',
        ));
    }

    public function drawLine($array, $color)
    {
        $data = array();
        $data['type'] = 'line';
        
        foreach($array as $key => $value) {
            $data['data'][$key] = $value->count;
        }

        $data['backgroundColor'] = 'transparent';
        $data['borderColor'] = $color == 'blue' ? '#007bff' : '#ced4da';
        $data['pointBorderColor'] = $color == 'blue' ? '#007bff' : '#ced4da';
        $data['pointBackgroundColor'] = $color == 'blue' ? '#007bff' : '#ced4da';
        $data['fill'] = false;

        return $data;
    }
}
