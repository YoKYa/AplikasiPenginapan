<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    protected $table = 'hotel';
    protected $fillable = [
        'user_id',
        'nama_hotel',
        'alamat_hotel',
        'jumlah_kamar',
        'harga',
        'file_verify',
        'verify_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
