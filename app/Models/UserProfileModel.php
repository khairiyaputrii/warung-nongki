<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfileModel extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'phone', 'address'];
}
