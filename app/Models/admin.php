<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public function alogindata($table,$email,$password){
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }

    public function viewteacherdata($table){
        return DB::table($table)->get();
    }

    public function viewnotedata($table){
        return DB::table($table)->get();
    }


    public function viewslbsdata($table){
        return DB::table($table)->get();
    }

     public function viewtmetbledata($table){
        return DB::table($table)->get();
    }


    public function aprvenote($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }

     public function dclnenote($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
     public function aprveslbs($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }

     public function dclneslbs($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }


    public function aprvetmetble($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }

     public function dclnetmetble($table,$id,$data){
        return DB::table($table)->where('id',$id)->update($data);
    }
     
}


