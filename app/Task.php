<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id','description','date'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function verifyDate($id){
        $task = Task::find($id);
         $date = Carbon::createFromFormat('Y-m-d',$task->date);
        $now = Carbon::now();
        if($date->greaterThan($now->sub('days',1))){
            return true;
        }
        return false;
    }
}
