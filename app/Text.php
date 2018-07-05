<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Text extends Model
{
  protected $table = 'texts';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
    $select = rand(1,2);
    $data = DB::table('texts')->where('id',$select)->get();

    return $data;
  }
}