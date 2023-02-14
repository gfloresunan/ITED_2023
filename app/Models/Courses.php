<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'mdl_course';
    public $timestamps = false;

    const CREATED_AT = 'timecreated';
}
