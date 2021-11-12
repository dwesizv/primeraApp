<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    
    protected $table = 'performance';
    
    protected $fillable = ['name', 'category', 'artist', 'budget',];
    
    protected $attributes = ['budget' => 0,];
    
    public function events () {
        return $this->hasMany ('App\Models\Event', 'idperformance');
    }
}
