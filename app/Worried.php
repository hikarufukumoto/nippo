<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Worried extends Model
{
  protected $table = 'worried';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,41);
   $worried = DB::table('worried')->where('id',$select)->get();

    return $worried;
  }
}