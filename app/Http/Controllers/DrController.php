<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Diag;
class DrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $patient= Patient::all();
        return view('ui.doctor.index')
        ->with('patient',$patient)
        ;
    }

    public function patient(Request $request)
    {
       $f_limiter="||";
       $s_limiter="###";
       $m="";
       $len=sizeof($request->med_o);
       for ($i=0; $i < $len; $i++) { 
           $temp="";
           $medo= $request->med_o[$i];
           $dos= $request->dosage[$i];
           $dur=$request->dur[$i];
           $temp=$medo.$f_limiter.$dos.$f_limiter.$dur;
           $m .= $temp.$s_limiter;
       }
        $d= new Diag;
        $d->user_id=$request->user_id;
        $d->diagnosis=$request->diag;
        $d->medicines=$m;
        $d->save();
        $p= Patient::find($request->user_id);
        $p->type="old";
        $p->save();
        // return "Test";
        return redirect('/dr/patient');
    }
    public function popup($user_id)
    {
        # code...
        $data=array();
        $d= Diag::where('user_id',$user_id)->first();
        // return $d->user_id;
        $u= Patient::find($d->user_id);
        $f_e= explode("###",$d->medicines);

        foreach ($f_e as $f) {
            # code...
            if (strlen($f)!=0) {
                # code...
                         $s_e=explode("||",$f) ;
           array_push($data,$s_e);
            }
         // $temp=array();  

        }
        // return $data;
        return view("ui.doctor.popup")->with('diag',$d)->with('user',$u)->with('data',$data);
    }
}
