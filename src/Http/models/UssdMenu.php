<?php
namespace johnnywoode\quickussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class UssdMenu extends Model {

    protected $table = 'quickussd_menus';


    protected $fillable = ['title','type','is_parent','confirmation_message'];


}
