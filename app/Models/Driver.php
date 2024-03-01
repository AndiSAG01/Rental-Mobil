<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'drivers';

    protected $fillable = [
        'name',
        'telphone',
        'address',
        'gender',
        'SIM',
        'status',
    ];

    /**
     * Get all of the transaksis for the Driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
