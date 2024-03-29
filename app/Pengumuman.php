<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = [
        'subject', 'tgl', 'pesan', 'stat', 'users_id'
    ];

    // FK
    public function user(){
        return $this->belongsTo('App\User');
    }
}
