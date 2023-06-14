<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $meeting_frequency = array('En gang om ugen', 'Hver anden uge', 'En gang om måneden');
        $forms_of_meeting = array('Virtuelle møder', 'Fysiske møder');
        $can_do_for_network = array(
            'Bestyrelsesarbejde', 
            'Bestyrelsesformand', 
            'Konceptudvikling og forrentningsmodeller',
            'Lobbyisme',
            'Netværksledelse',
            'Politik',
            'Public Affairs',
            'Public Relation (PR)',
            'Salgsledelse'
        );
        $my_interest = array('Amerikansk fodbold', 'Dykning');
        $can_network_do_for_me = array(
            'Kommunikation',
            'Konceptudvikling og forretningsmodeller',
            'Netværksledelse',
            'Politik',
            'Public Affairs',
            'Salgsstrategi',
            'Økonomi'
        );
        $important_topic = array('Kommunikation', 'Politik', 'Public Affairs', 'Public Relation (PR)');
        
        $selectedCanDoForNetwork = $this->selectKeys($can_do_for_network);
        $selectedMyInterest = $this->selectKeys($my_interest);
        $selectedCanNetworkDoForMe = $this->selectKeys($can_network_do_for_me);
        $selectedImportantTopic = $this->selectKeys($important_topic);
        
        return [
            'meeting_frequency' => $meeting_frequency[ array_rand( $meeting_frequency ) ],
            'forms_of_meeting' => $forms_of_meeting[ array_rand( $forms_of_meeting ) ],
            'my_interest' => json_encode($selectedMyInterest),
            'can_do_for_network' => json_encode($selectedCanDoForNetwork),
            'can_network_do_for_me' => json_encode($selectedCanNetworkDoForMe),
            'important_topic' => json_encode($selectedImportantTopic)
        ];
    }

    private function selectKeys($array)
    {
        $count = rand(2, count($array));
        $randomKeys = array_rand($array, $count);
        $randomElements = [];
        
        foreach ($randomKeys as $key) {
            $randomElements[] = $array[$key];
        }

        return $randomElements;
    }
}
