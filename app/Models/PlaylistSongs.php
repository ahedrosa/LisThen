<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSongs extends Model
{
    use HasFactory;
    
    protected $table = 'playlist_songs';
    
    
    protected $fillable = [
        'playlist_id',
        'song_id'
        ];
    
    public function playlist(){
        
        return $this->belongsTo('\App\Models\Playlist', 'playlist_id');
        
    }
    
    public function song(){
        
        return $this->belongsTo('\App\Models\Song', 'song_id');
        
    }
}
