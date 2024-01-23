<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'total_harga', 'transaksi_code'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->transaksi_code = $model->getRandomString();
        });
    }

    public function generateRandomString($length = 6)
    {
        $character = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characterLength = strlen($character);
        $randomString = '';
        for ($i=0; $i < $length; $i++) {
            $randomString .= $character[rand(0,$characterLength - 1)];
        }
        return $randomString."". date("YmdHis");
    }

    public function getRandomString()
    {
        $str = $this->generateRandomString();
        return $str;
    }

    public function items()
    {
        return $this->hasMany(TransaksiItem::class, 'id_transaksi');
    }
}
