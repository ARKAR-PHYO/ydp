<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $batches = Batch::all();
        $students = Student::all();
        return view('backend/student/index', compact('batches','students'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $batches = Batch::all();
        return view('backend/student/create',compact('batches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        
    
    public function store(Request $request)
    {
         $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->assignRole('Student');

        $student= new Student();
        $student->user_id =User::orderBy('id', 'DESC')->first()->id;
        $student->name =request('name');
        $student->ph_no =request('ph_no');
        $student->address =request('address');
        $student->batch_id =request('batch_id');

         if($request->hasfile('photo')){
            $photo = $request->file('photo');
            $upload_dir = public_path().'/storage/images/';

            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move($upload_dir,$name);

            $path='/storage/images/'.$name;
        }else{
            $path='';
        }



        $student->photo =$path;

        $student->save();

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
