<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['task_id','description'];

    public function task(){
        return $this->belongsTo(Task::class,'task_id')->with('user');
    }
}
