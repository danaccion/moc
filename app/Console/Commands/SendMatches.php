<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Mail;

class SendMatches extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:matches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Meet Over Coffee matches';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('role', 'member')->get();

        foreach ($users as $user) {
            $networks = $user->memberships->pluck('network_id');
            $matches = UserProfile::whereHas('networks', function($query) use ($networks, $user) {
                return $query->whereIn('network_id', $networks)->where('user_id', '!=', $user->id);
            })->where('user_id', '!=', $user->id)->take(5);

            $targetValues = ["meeting_frequency", "forms_of_meeting", "my_interest", "can_do_for_network", "can_network_do_for_me", "important_topic"];
            $similarityScores = [];

            foreach ($matches as $match) {
                $score = 0;
                $columnValues = [$match->meeting_frequency, $match->forms_of_meeting, $match->my_interest, $match->can_do_for_network, $match->can_network_do_for_me, $match->important_topic];
                foreach ($columnValues as $i => $columnValue) {
                    $score += $this->similarity($columnValue, $targetValues[$i]);
                }
                $averageScore = $score / count($columnValues);
                $similarityScores[$match->user_id] = number_format((float)($averageScore * 100), 2);
            }

            arsort($similarityScores);
            $topUsers = array_slice($similarityScores, 0, 5, true);

            Mail::to($user->email)->send(new \App\Mail\SendMatches($users));
        }
    }
    
    private function similarity($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $maxLen = max($len1, $len2);
    
        if ($maxLen === 0) {
            return 1.0;
        }
    
        $levDist = levenshtein($str1, $str2);
    
        return 1.0 - ($levDist / $maxLen);
    }
}
