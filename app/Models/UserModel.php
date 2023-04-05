<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    protected $fillable = ['email', 'password', 'user_profile_id'];

    public function userProfile(): HasOne
    {
        return $this->hasOne(UserProfileModel::class);
    }
}
