<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    
    protected $table = 'place';
    
    public $timestamps = false;
    
    protected $fillable = ['name', 'capacity', 'budget', ];
    
    protected $attributes = ['capacity' => 0, 'budget' => 0, ];
    
    public function events () {
        return $this->hasMany ('App\Models\Event', 'idplace');
    }
}
