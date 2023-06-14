<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'role',
        'is_registered'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function memberships()
    {
        return $this->hasMany(NetworkMember::class, 'user_id');
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }
<<<<<<< HEAD

    public function networkAdmin()
    {
        return $this->hasOne(Network::class, 'user_id');
    }

    public function sendPasswordResetNotification($token){
        // $this->notify(new MyCustomResetPasswordNotification($token)); <--- remove this, use Mail instead like below
    
        $data = [
            $this->email
        ];
    
        Mail::send('mail.reset-password', [
            'fullname'      => $this->name,
            'reset_url'     => route('password.reset', ['token' => $token, 'email' => $this->email]),
        ], function($message) use($data){
            $message->subject('Reset Password Notification');
            $message->to($data[0]);
        });
    }
=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
}
