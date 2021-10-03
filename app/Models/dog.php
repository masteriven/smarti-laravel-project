<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dog extends Model
{
    use HasFactory;
    public $timpestamps = false;
    protected $fillable = ['name','ownerName','ownerPhone','color','age','kind'];

}
