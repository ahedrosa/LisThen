<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $table = 'song';
    
    protected $cast = [
        'duration'=> 'datetime:H:i:s',
        ];
    
    protected $filable = [
        'name',
        'duration',
        'listens',
        'artist_id',
        'album_id',
        'genre_id'
        ];
    
    public function playlistsongs(){
        
        return $this->hasMany('\App\Models\PlaylistSongs', 'song_id');
        
    }
    
    public function artist(){
        
        return $this->belongsTo('\App\Models\Artist','artist_id');
        
    }
    
    public function genre(){
        
        return $this->belongsTo('\App\Models\Artist','genre_id');
        
    }
    
    public function album(){
        
        return $this->belongsTo('\App\Models\Artist','album_id');
        
    }
    
}
