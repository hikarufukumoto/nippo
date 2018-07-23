<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Happy extends Model
{
  protected $table = 'happy';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,47);
   $data = DB::table('happy')->where('id',$select)->get();

    return $data;
  }
}