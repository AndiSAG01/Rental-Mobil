<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the trannsaksis for the categorie
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
