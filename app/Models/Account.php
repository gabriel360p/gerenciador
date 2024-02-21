<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'email',
        'username',
        'password',
        'email_confirmation',
        'description',
        'user_id'
    ];


    /**
     * Get the user associated with the Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

}
