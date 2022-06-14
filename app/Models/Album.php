<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    
    protected $table = 'album';
    
    protected $fillable = [
        'name',
        'type',
        ];
        
    
    public function songs(){
        
        return $this->hasMany('\App\Models\Song', 'album_id');
        
    }
    
}
