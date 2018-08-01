<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $guarded = [];


    public function scopeRecords($query, $status) {
        return Log::where('status', $status)->get();
    }

}
