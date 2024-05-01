<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'pakets';

    protected $fillable = ['nama','harga','deskripsi'];

    public function pesanan(): HasMany
    {
        return $this->hasMany(Pesanan::class);
    }
}
