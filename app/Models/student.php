<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
     public function viewnotestudent($table){
        return DB::table($table)->get();
    }
public function viewslbsstudent($table){
        return DB::table($table)->get();
    }
    public function viewtmetbledata($table){
        return DB::table($table)->get();
    }
     public function viewstudentdata($table){
        return DB::table($table)->get();
    }


    
}



