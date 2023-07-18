<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'username',
        'alamat',
        'gender',
        'phone_number',
        'ktp_number',
        'ktp_photo',
        'password',
        'isAdmin'
    ];

    // Tambahkan relasi atau method lain yang diperlukan di sini
}