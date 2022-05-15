<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    protected $table = 'genre';
    
    
    protected $filable = [
        'name'
        ];
        
    public function songs(){
        
        return $this->hasMany('\App\Models\Song','genre_id');
        
    }
    
}
