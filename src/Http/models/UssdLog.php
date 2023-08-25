<?php

namespace johnnywoode\quickussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class UssdLog extends Model {

    protected $table = 'quickussd_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['phone', 'text', 'session_id', 'service_code'];

}
