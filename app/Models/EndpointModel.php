<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EndpointModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'endpoints';

    public static function getUrl($id){
        return self::find($id);
    }

}
