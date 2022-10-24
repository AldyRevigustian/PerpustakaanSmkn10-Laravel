<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitor_count';
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'visitor_id',
        'member_id',
        'member_name',
        'institution',
        'checkin_date',
    ];


}
