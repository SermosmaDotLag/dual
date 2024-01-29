<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ApiModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'pokeapi';
    protected $fillable = [
        'pokeName',
        'url',
    ];

    public static function show(): Collection{
        return self::all();
    }

    public static function upload($apiDataToInsert): bool{
        // var_dump($apiDataToInsert);
        // exit;
        return self::insert($apiDataToInsert);
    }

}
