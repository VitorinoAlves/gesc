<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cras extends Model
{
    protected $table = 'cras';
    public $timestamps = false;
    protected $fillable = array('nomeCras', 'telefone');

    /*protected $guarded = ['id'];

   public function post()
    {
        return $this->belongsTo(Post::class);
    }*/
}
