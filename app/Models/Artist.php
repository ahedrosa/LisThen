<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    protected $table = 'artist';
    
    
    protected $fillable = [
        'name',
        ];
        
    public function songs(){
        
        return $this->hasMany('\App\Models\Song', 'artist_id');
        
    }    
    
}
