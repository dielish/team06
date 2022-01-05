<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Killer extends Model
{
    use HasFactory;

    protected $fillable = [

        'killer',
        'Did',
        'difficulty',
        'strenght1',
        'strenght2',
        'inherited1',
        'inherited2',
        'inherited3',
        'anothername',

    ];

    public function DLC()
    {
        return $this->belongsTo('App\Models\DLC', 'Did', 'id');
    }

    public function scopeDifficulty($query)
    {
        $query->where('difficulty', '=', '簡單')
        ->orderBy('difficulty');

    }
    public function scopesoso($query)
    {
        $query->where('difficulty', '=', '普通')
            ->orderBy('difficulty');

    }
    public function scopeer($query)
    {
        $query->where('difficulty', '=', '困難')
            ->orderBy('difficulty');

    }

}
