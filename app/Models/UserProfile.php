<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone_number',
        'title',
        'resume',
        'add_more_profile_network',
        'meeting_frequency',
        'forms_of_meeting',
        'my_interest',
        'can_do_for_network',
        'can_network_do_for_me',
        'important_topic',
        'business_area',
        'company_name',
        'company_address',
        'company_address_2',
        'zip_code',
        'town',
        'country'
    ];

    public function networks() {
        return $this->hasMany(NetworkMember::class, 'user_id', 'user_id');
    }
}
