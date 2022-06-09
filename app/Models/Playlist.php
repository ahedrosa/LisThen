<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    
    protected $table = 'playlist';
    
    protected $fillable = [
        'name',
        'user_id',
        'name',
        ];
    
        
    public function user(){
        
        return $this->belongsTo('\App\Models\User','user_id');
        
    }
    
    public function playlistsongs(){
     
        return $this->hasMany('\App\Models\PlaylistSongs', 'playlist_id');
        
    }
    
}
