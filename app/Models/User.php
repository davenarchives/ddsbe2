<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbluser';

    // Columns that can be mass assigned
    protected $fillable = ['username', 'password', 'gender', 'jobid'];

    // Disabling timestamps
    public $timestamps = false;

    // Primary key
    protected $primaryKey = 'id';

    // Hide sensitive fields
    protected $hidden = ['password'];
}
