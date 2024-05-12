<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======

        /**
     * Get the job posts created by the user.
     */
    public function jobPosts()
    {
        return $this->hasMany(PostJob::class);
    }
    public function company()
    {
        return $this->hasMany(Company::class);
    }
>>>>>>> 30c9c561c35c0306406f604976116db8ae36deab
    public function education(){
        return $this->hasMany(Education::class);
    }

    public function experience(){
        return $this->hasMany(experience::class);
    }

    public function skills(){
        return $this->hasMany(Skill::class);
    }

    public function Personal(){
        return $this->hasOne(PersonalInformation::class);
<<<<<<< HEAD
=======

>>>>>>> 30c9c561c35c0306406f604976116db8ae36deab
    }
}
