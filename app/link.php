<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    //
    protected $table = "links";
    protected $fillable = ['name', 'url', 'subject', 'notes', 'status', 'created_at','updated_at'];
    protected $primaryKey = 'id';
}
