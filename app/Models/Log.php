<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $guarded = [];

//    public function queuedRecords() {
//        return Log::where('status', 1)->orderBy('created_at', 'desc')->get();
//    }
//
//    public function doneRecords() {
//        return Log::where('status', 2)->get();
//    }

    public function scopeRecords($query, $status) {
        return Log::where('status', $status)->get();
    }

}
