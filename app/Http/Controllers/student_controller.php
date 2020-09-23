<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;



class student_controller extends Controller {

  //retriving data from database
  public function view(){
  $students = DB::select('select * from student');
  return view('index', ['students' => $students]);
   }

  public function create(){
  return view('create');
   }

   public function edit($id){
   $student = Student::find($id);
   return view('edit')->with('student', $student);
    }

  //inserting data in database
  /*public function store(Request $request){
   $name = $request->input('name');
   $reg_id = $request->input('reg_id');
   $dept_name = $request->input('dept_name');
   $info = $request->input('info');
   $data=array('name'=>$name,"reg_id"=>$reg_id,"dept_name"=>$dept_name,"info"=>$info);
   DB::table('student')->insert($data);

   return redirect()-> route('index');

   }
*/

//inserting data in database
public function store(Request $request){
//validation
 $this->validate($request, [
    'name'      => 'required',
    'reg_id'    => 'required',
    'dept_name' => 'required',
    'info'      => 'nullable',
    'image'     => 'nullable|image'
 ]);
//insert data into student table
 $student = new Student;
 $student->name = $request->name;
 $student->reg_id = $request->reg_id;
 $student->dept_name = $request->dept_name;
 $student->info = $request->info;

  if ($request->hasFile('image')) {
   $student->image = $request->image->store('public/images');
  }

 $student->save();
 return redirect()-> route('index');
   }

 // updating existing student information
 public function update(Request $request, $id){
  $student = Student::find($id);
  $student->name = $request->name;
  $student->reg_id = $request->reg_id;
  $student->dept_name = $request->dept_name;
  $student->info = $request->info;
  if ($request->hasFile('image')) {
   $student->image = $request->image->store('public/images');
  }
  $student->save();
  return redirect()-> route('index');
      }


 public function delete(Request $request, $id){
  $student = Student::find($id);
  $student->delete();
  return redirect()-> route('index');
}


}
