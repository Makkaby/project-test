<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answer';
    protected $primaryKey='id';

    public function question() 
    {
        return $this->belongsTo(Question::class);
    }
}
