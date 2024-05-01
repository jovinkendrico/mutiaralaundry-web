<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['nama','password','username','email','alamat'];

    public function pesanan(): HasMany
    {
        return $this->hasMany(Pesanan::class);
    }
}
