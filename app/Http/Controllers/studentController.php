<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\tregistration;
use App\Models\note;
use App\Models\syllabus;
use App\Models\timetable;
use App\Models\admin;
use App\Models\student;

class studentController extends Controller
{

    public function __construct() {
        $this->obj=new tregistration;
        $this->obj1=new admin;
        $this->obj2=new student;
        
       
    }

    public function teacherindex(){
        return view('teacherindex');
    }

    public function tregister(){
        return view('tregister');
    }
    public function tinsert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        
        $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password];
        $this->obj->tinsertdata('tregistrations',$data);
        return redirect('/tlogin');
        
        }
        public function tlogin(){
        return view('tlogin');
       }



     public function tloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj->tlogindata('tregistrations',$email,$password);
        
           if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
                        
            return redirect('/teacherdashboard');

        }else{
            return redirect('/tlogin')->with('error','invalid details');
        }
      }


      public function teacherdashboard(){
        return view('teacherdashboard');
    }


     public function tedit(){
        $uid=session('sess');
        $data['result']=tregistration::where('id',$uid)->get();
        return view('tedit',$data);
    }
    public function teditaction(Request $req,$id){
    $name=$req->input('name');
    $email=$req->input('email');
    $phone=$req->input('phone');
    $password=$req->input('password');
   
    
    $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password,];
    tregistration::where('id',$id)->update($data);
    return redirect('/teacherdashboard');
}

 public function notesupload(){
       return view('notesupload');
      }
      public function uploadnoteaction(Request $req){
        $class=$req->input('class');
        $subject=$req->input('subject');
        $note=$req->file('note');
        $filename=$note->getClientOriginalName();
        $note->move(public_path().'/uploadnote',$filename);
        $data=['class'=>$class,'subject'=>$subject,'note'=>$note];
        $this->obj->insertnote('notes',$data);
        return redirect('/teacherdashboard');
        
        }
        public function addsyllabus(){
       return view('addsyllabus');
      }
      public function addslbsaction(Request $req){
        $class=$req->input('class');
        $slbs=$req->file('slbs');
        $filename=$slbs->getClientOriginalName();
        $slbs->move(public_path().'\syllabus',$filename);
        $data=['class'=>$class,'slbs'=>$slbs];
        $this->obj->syllabusdata('syllabi',$data);
         return redirect('/teacherdashboard');
        }


         public function addtmetble(){
       return view('addtmetble');
      }
      public function addtmetbleaction(Request $req){
        $class=$req->input('class');
        $tmetble=$req->file('tmetble');
        $filename=$tmetble->getClientOriginalName();
        $tmetble->move(public_path().'\timetable',$filename);
        $data=['class'=>$class,'tmetble'=>$tmetble];
        $this->obj->tmetbledata('timetables',$data);
         return redirect('/teacherdashboard');
        }
        public function tlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/teacherindex');
     } 

      public function adminindex(){
        return view('adminindex');
    }


    public function adminlogin(){
        return view('adminlogin');
       }



     public function adminloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');
        $data=$this->obj1->alogindata('admin',$email,$password);
        
           if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
                        
            return redirect('/admindashboard');

        }else{
            return redirect('/adminlogin')->with('error','invalid details');
        }
      }


       public function admindashboard(){
        return view('admindashboard');
    }


    public function viewteacher(){
        $data['result']=$this->obj1->viewteacherdata('tregistrations');
        return view('viewteacher',$data);
       }

        public function viewnotesadmin(){
        $data['result']=$this->obj1->viewnotedata('notes');
        return view('viewnotesadmin',$data);
       }

        public function viewslbs(){
        $data['result']=$this->obj1->viewslbsdata('syllabi');
        return view('viewslbs',$data);
       }


       public function viewtmetbleadmin(){
        $data['result']=$this->obj1->viewtmetbledata('timetables');
        return view('viewtmetbleadmin',$data);
       }


        public function noteapprove($id){
    $data=['status'=>"approveed"];
    $this->obj1->aprvenote('notes',$id,$data);
       return redirect('/viewnotesadmin');
}
public function notedecline($id){
    $data=['status'=>"decline"];
    $this->obj1->dclnenote('syllabi',$id,$data);
       return redirect('/viewnotesadmin');
}
public function slbsapprove($id){
    $data=['status'=>"approveed"];
    $this->obj1->aprveslbs('syllabi',$id,$data);
       return redirect('/viewslbs');
}
public function slbsdecline($id){
    $data=['status'=>"decline"];
    $this->obj1->dclneslbs('syllabi',$id,$data);
       return redirect('/viewslbs');
}
public function tmetbleapprove($id){
    $data=['status'=>"approveed"];
    $this->obj1->aprvetmetble('timetables',$id,$data);
       return redirect('/viewslbs');
}
public function tmetbledecline($id){
    $data=['status'=>"decline"];
    $this->obj1->dclnetmetble('timetables',$id,$data);
       return redirect('/viewslbs');
}


public function alogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/adminindex');
     }

      public function studentindex(){
        return view('studentindex');
    }

    public function sregister(){
        return view('sregister');
    }
    public function sinsert(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $phone=$req->input('phone');
        $password=$req->input('password');
        
        $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password];
        student::insert($data);
        return redirect('/studentlogin');
        
        }

        public function studentlogin(){
        return view('studentlogin');
       }



     public function sloginaction(Request $req){

        $email=$req->input('email');

        $password=$req->input('password');

        $data=student::where('email',$email)->where('password',$password)->first();
        
           if(isset($data)){
            $req->session()->put(array('sess'=>$data->id));
            $id=session('sess');
                        
            return redirect('/studentdashboard');

        }else{
            return redirect('/studentlogin')->with('error','invalid details');
        }
      }

      public function studentdashboard(){
        return view('studentdashboard');
       }
 public function sedit(){
        $uid=session('sess');
        $data['result']=student::where('id',$uid)->get();
        return view('sedit',$data);
    }

    public function seditaction(Request $req,$id){
    $name=$req->input('name');
    $email=$req->input('email');
    $phone=$req->input('phone');
    $password=$req->input('password');
   
    
    $data=['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password,];
    student::where('id',$id)->update($data);
    return redirect('/studentdashboard');
}

 public function viewnotes(){
        $data['result']=$this->obj2->viewnotestudent('notes');
        return view('viewnotes',$data);
       }
public function studentlogout(Request $req){
        $req->session()->forget('ses');
        return redirect('/studentindex');
     }

    
       public function viewstudentslbs(){
        $data['result']=$this->obj2->viewslbsstudent('syllabi');
        return view('viewstudentslbs',$data);
       }
public function viewtmetable(){
        $data['result']=$this->obj2->viewtmetbledata('timetables');
        return view('viewtmetable',$data);
       }

       public function viewstudent(){
        $data['result']=$this->obj2->viewstudentdata('students');
        return view('viewstudent',$data);
       }
       public function viewstudentteacher(){
        $data['result']=$this->obj->viewtchrdata('students');
        return view('viewstudent',$data);
       }


}
