<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'image',
    ];

    public function setImageAttribute($value)
    {
        if (!empty($value)) {
            $filename = $value->getClientOriginalName();
            $location = storage_path('app/public/users/profile');
            $value->move($location, $filename);
            $this->attributes['image'] = $filename;
        }
    }
    public function getImageAttribute($value)
    {
        return asset('storage/users/profile/'.$value);
    }

    // public function uploadImage(UploadedFile $file)
    // {
    //     $filename = $file->getClientOriginalName();
    //     $location = storage_path('app/public/profile');
    //     $file->move($location, $filename);
    //     $this->attributes['image'] = $filename;
    // }

    // public function getImageAttribute($value)
    // {
    //     return asset('storage/profile/' . $value);
    // }

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
        'password' => 'hashed',
    ];


}
