<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id']; 

    protected $fillable = [
        'Merek',
        'Foto',
        'Harga',
        'Processor',
        'Layar',
        'Memori',
        'Deskripsi',
        'categories_id'
    ];

    public function categories():BelongsTo{
        return $this->belongsTo(categories::class);
    }
}