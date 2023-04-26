<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Department;
use Validator;

class APIController extends Controller
{
    public $departments, $students;
    public function getDepartments()
    {
        $this->departments = Department::all();
        return response()->json($this->departments);
    }

    public function newDepartment(Request $request)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:departments,email',
            'mobile' => 'required|unique:departments,mobile',
            'total_credit' => 'required',
            'department_head' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        Department::create($input);

        $response = [
            'success' => true,
            'message' => 'New Department Added Successfully',
        ];
        return response()->json($response, 200);
    }

    public function updateDepartment(Request $request, $id)
    {
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:departments,email',
            'mobile' => 'required|unique:departments,mobile',
            'total_credit' => 'required',
            'department_head' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        $department = Department::find($id);
        $department->fill($input);
        $department->save();


        $response = [
            'success' => true,
            'message' => 'Department Updated Successfully',
        ];
        return response()->json($response, 200);
    }

    public function deleteDepartment($id)
    {
        $department = Department::find($id);
        $department->delete();
        $response = [
            'success' => true,
            'message' => 'Department Deleted Successfully',
        ];
        return response()->json($response, 200);
    }

    public function getStudents()
    {
        $this->students = Student::all();
        return response()->json($this->students);
    }

//    public function newStudent(Request $request)
//    {
//        // validation
//        $validator = Validator::make($request->all(), [
//            'name' => 'required',
//            'email' => 'required|email|unique:departments,email',
//            'mobile' => 'required|unique:departments,mobile',
//            'department' => 'required',
//            'image' => 'required',
//            'guardian_mobile' => 'required',
//        ]);
//
//        if($validator->fails())
//        {
//            $response = [
//                'success' => false,
//                'message' => $validator->errors(),
//            ];
//            return response()->json($response, 400);
//        }
//
//        $input = $request->all();
//        Student::create($input);
//
//        $response = [
//            'success' => true,
//            'message' => 'New Student Information Added Successfully',
//        ];
//        return response()->json($response, 200);
//    }

    public function updateStudent(Request $request, $id)
    {
        return response()->json($request->all());
        // validation
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:departments,email',
            'mobile' => 'required|unique:departments,mobile',
            'department' => 'required',
            'image' => 'required',
            'guardian_mobile' => 'required',
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();
        $student = Student::find($id);
        $student->fill($input);
        $student->save();


        $response = [
            'success' => true,
            'message' => 'Department Updated Successfully',
        ];
        return response()->json($response, 200);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        $response = [
            'success' => true,
            'message' => 'Department Deleted Successfully',
        ];
        return response()->json($response, 200);
    }

    public function newStudent(Request $request)
    {
        $request->validate([
            'name'            => 'required',
            'email'           => 'required|email|unique:departments,email',
            'mobile'          => 'required|unique:departments,mobile',
            'department'      => 'required',
            'guardian_mobile' => 'required',
            'file'            => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $student = new Student();
        if($request->file())
        {
            $image        = $request->file('file');
            $extension    = $image->getClientOriginalExtension();
            $imageName    = time() . '.' . $extension;
            $directory    = 'images/';
            $image->move($directory, $imageName);
            $imageUrl     = $directory . $imageName;

            $student->image            = $imageUrl;
            $student->name             = $request->name;
            $student->email            = $request->email;
            $student->mobile           = $request->mobile;
            $student->department       = $request->department;
            $student->guardian_mobile  = $request->guardian_mobile;
            $student->save();
            return response()->json(['success' => 'File Uploaded Successfully']);
        }
    }

//    public function updateStudent(Request $request, $id)
//    {
//        $request->validate([
//            'name'            => 'required',
//            'email'           => 'required|email|unique:departments,email',
//            'mobile'          => 'required|unique:departments,mobile',
//            'department'      => 'required',
//            'guardian_mobile' => 'required',
//            'file'            => 'required|mimes:jpg,jpeg,png|max:2048'
//        ]);
//
//        $student = Student::find($id);
//        if($request->file())
//        {
//            $image        = $request->file('file');
//            $extension    = $image->getClientOriginalExtension();
//            $imageName    = time() . '.' . $extension;
//            $directory    = 'images/';
//            $image->move($directory, $imageName);
//            $imageUrl     = $directory . $imageName;
//
//            $student->image            = $imageUrl;
//            $student->name             = $request->name;
//            $student->email            = $request->email;
//            $student->mobile           = $request->mobile;
//            $student->department       = $request->department;
//            $student->guardian_mobile  = $request->guardian_mobile;
//            $student->save();
//            return response()->json(['success' => 'File Uploaded Successfully']);
//        }
//    }
}
