<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'member_id',
        'member_name',
        'inst_name',
    ];

}
