<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tregistration extends Model
{
    use HasFactory;
    public function tinsertData($table,$data){
        DB::table($table)->insert($data);

    }
    public function tlogindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
    public function insertnote($table,$data){
        DB::table($table)->insert($data);

    }
    public function syllabusData($table,$data){
        DB::table($table)->insert($data);

    }
    public function tmetbledata($table,$data){
        DB::table($table)->insert($data);

    }
    public function viewtchrdata($table){
        return DB::table($table)->get();
    }
}
