<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = 'event';
    
    protected $fillable = ['idperformance', 'idplace', 'date', 'performancebudget', 'placebudget', 'price', ];
    
    protected $attributes = ['date' => date("Y-m-d"), 'performancebudget' => 0, 'placebudget' => 0, 'price' => 0, ];
    
    public function performance() {
        return $this->belongsTo('App\Models\Performance', 'idperformance');
    }
    
    public function place() {
        return $this->belongsTo('App\Models\Place', 'idplace');
    }
}