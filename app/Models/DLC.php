<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DLC extends Model
{
    use HasFactory;

    protected $table = "dlcs";
    protected $fillable=[
        'product',
        'price',
    ];
    public function killers()
    {
        return $this->hasMany('App\Models\Player','Did');
    }
    public function scopeprice($query)
    {
        $query->where('price', '=', '99');


    }
    public function scopep($query)
    {
        $query->where('price', '=', '138');


    }
    public function scopert($query)
    {
        $query->where('price', '=', '226');


    }
}
