<?php

namespace App\Observers;

use App\Log;
use App\Mail\LogCreated;
use App\Task;
use Illuminate\Support\Facades\Mail;

class LogObserver
{
    /**
     * Handle the log "created" event.
     *
     * @param  \App\Log  $log
     * @return void
     */
    public function created(Log $log)
    {
        $task = Task::where('id',$log->task_id)->with('user')->first();
        Mail::to($task->user->email)->send(new LogCreated);
    }

    /**
     * Handle the log "updated" event.
     *
     * @param  \App\Log  $log
     * @return void
     */
    public function updated(Log $log)
    {
        //
    }

    /**
     * Handle the log "deleted" event.
     *
     * @param  \App\Log  $log
     * @return void
     */
    public function deleted(Log $log)
    {
        //
    }

    /**
     * Handle the log "restored" event.
     *
     * @param  \App\Log  $log
     * @return void
     */
    public function restored(Log $log)
    {
        //
    }

    /**
     * Handle the log "force deleted" event.
     *
     * @param  \App\Log  $log
     * @return void
     */
    public function forceDeleted(Log $log)
    {
        //
    }
}
