<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalCredential extends Model
{
    use HasFactory;

    protected $table = 'paypal_credentials';

    protected $fillable = [
        'user_id',
        'secret_id',
        'client_id',
    ];
}
