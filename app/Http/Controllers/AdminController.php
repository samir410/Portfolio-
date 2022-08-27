<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\User;
use App\Models\Skill;
use Carbon\Carbon;
use DB;
use Storage;

use Illuminate\Http\Request;
// use App\About;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::select("*")
                        ->whereNotNull('last_seen')
                        ->orderBy('last_seen', 'DESC')
                        ->paginate(10);
          
        return view('Admin.user', compact('users'));
    }
    public function dashboard()
    {
        return view('Admin.dashboard');
    }
    public function about_me(){
       return view('Admin.about');
    }
    public function edit($id){
        $abouts = About::find($id);
        return view('Admin.about_edit',compact('abouts'));
    }

    public function about_view(){
        $abouts = About::get();
        return view('Admin.about_view',compact('abouts'));
     }
     public function edit_about_update(Request $request,$id){
        //   dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required',
            'fullname' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'address' => 'required',
            'number' => 'required',
            'inputEmail' => 'required',
            'profile_image' => 'image|nullable|max:19999999',
            'description1'=> 'required',
            'description2'=> 'required',
            'description3'=> '  required',
        
        ]);
        // dd($request->descripbtion1);
        // dd($id);
            $about = About::find($id);
     
            if($request->input('fullname')){
                if($request->hasfile('profile_image'))
                {
                $file = $request->file('profile_image')->getClientOriginalName();     
                $fileName = pathinfo($file,PATHINFO_FILENAME); 
                $extension = $request->file('profile_image') ->getClientOriginalExtension();   
                $filenamestore = $fileName.'_'.time().'.'.$extension;
                ///upload image
                $path = $request->file('profile_image')->storeas('public/img',$filenamestore);
                $old_image = About::find($id);
                 if($old_image->profile_image!='noimage.jpg') {
                 Storage::delete('public/img/'.$old_image->profile_image);
                  }
                $about->profile_image = $filenamestore;
    
               }

            //    else {
            //        $filenamestore ='noimage.jpg';
            //    }
            $about->title = $request->input('title');
            $about->fullname = $request->input('fullname');
            $about->dob = $request->input('dob');
            $about->age = $request->input('age');
            $about->address = $request->input('address');
            $about->number = $request->input('number');
            $about->inputEmail = $request->input('inputEmail');
         
            $about->description1=$request->input('description1');
            $about->description2=$request->input('description2');
            $about->description3=$request->input('description3');
            $about->created_at = Carbon::now();
            $about->update();

             return redirect('/dashboard/about_view')->with('status','The '. $about->fullname.' successfully updated');
        }
        else {
            return redirect('/dashboard/edit_about')->with('status1',' fill up please');
           }

     }

     
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'fullname' => 'required',
            'dob' => 'required',
            'age' => 'required',
            'address' => 'required',
            'number' => 'required',
            'inputEmail' => 'required',
            'profile_image' => 'image|nullable|max:19999999',
            'description1'=> 'required',
            'description2'=> 'required',
            'description3'=> '  required',
        
        ]);
        // dd($request->descripbtion1);
        if($request->input('fullname')){
            if($request->hasfile('profile_image'))
            {
            $file = $request->file('profile_image')->getClientOriginalName();     
            $fileName = pathinfo($file,PATHINFO_FILENAME); 
            $extension = $request->file('profile_image') ->getClientOriginalExtension();   
            $filenamestore = $fileName.'_'.time().'.'.$extension;
            ///upload image
            $path = $request->file('profile_image')->storeas('public/img',$filenamestore);
           }
           else {
               $filenamestore ='noimage.jpg';
           }
            $about= new About();
            $about->title = $request->input('title');
            $about->fullname = $request->input('fullname');
            $about->dob = $request->input('dob');
            $about->age = $request->input('age');
            $about->address = $request->input('address');
            $about->number = $request->input('number');
            $about->inputEmail = $request->input('inputEmail');
            $about->profile_image=$filenamestore;
            $about->description1=$request->input('description1');
            $about->description2=$request->input('description2');
            $about->description3=$request->input('description3');
            $about->created_at = Carbon::now();
            $about->save();

             return redirect('/dashboard/about_me')->with('status','The '. $about->fullname.' successfully added');
        }
        else {
            return redirect('/dashboard/about_me')->with('status1',' Select category please');
           }


    }


    ////skill
    public function add_skill(){
        return view('Admin.skill');
    }
    public function skill_data_store(Request $request){
        $validatedData = $request->validate([
            'skill_name' => 'required|unique:skills,skill_name',
            'level' => 'required|numeric|max:100|min:0',
       
        
        ]);
        // dd($request->descripbtion1);
        if($request->input('skill_name')){
            $skills= new Skill();
            $skills->skill_name = $request->input('skill_name');
            $skills->level = $request->input('level');
            $skills->created_at = Carbon::now();
            $skills->save();

             return redirect('/dashboard/add_skill')->with('status','The '. $skills->skill_name .' successfully added');
        }
        else {
            return redirect('/dashboard/add_skill')->with('status1',' store failed');
           }


    }
    public function skill_data_view(){
        $skills = Skill::get();
        return view('Admin.skill_view',compact('skills'));
    }

    
    public function edit_skill($skill_id){
        $skills=DB::table('skills')
        ->where('skill_id',$skill_id)->first();
        // $skills = Skill::find($skill_id);
        return view('Admin.skill_update',compact('skills'));
    }
    public function skill_update(Request $request,$skill_id){
            $validatedData = $request->validate([
                'skill_name' => 'required',
                'level' => 'required|numeric|max:100|min:0',
            ]);
            // dd($request->descripbtion1);
            $skills=DB::table('skills')
            ->where('skill_id',$skill_id)->first();
            if($request->input('skill_name')){
                // $skills->skill_name = $request->input('skill_name');
                // $skills->level = $request->input('level');
                // $skills->created_at = Carbon::now();
                // $skills->update();
                $data=array ();
                $data['skill_name'] = $request->skill_name;
                $data['level'] = $request->level;
                $result= DB::table('skills')
                ->where('skill_id',$skill_id)
                ->update($data);
    
                 return redirect('/dashboard/skill_data_view')->with('status',' successfully added');
            }
            else {
                return redirect('/dashboard/skill_update')->with('status1',' store failed');
               }

     }



   
}
