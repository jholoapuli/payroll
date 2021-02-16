<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Department;
use DB;
class DepartmentController extends Controller
{
    public function __construct(Department $department, Request $request)
    {
        $this->department = $department;
        $this->request = $request;
    }

    public function index(){  

            
        $department = $this->department;
        return dd($department);
    }

    public function create_department()
    {

        $department = $this->department->create(

            $this->request->except('_token')
            
         );
         return Redirect::route('crud');
    }

    public function update_form($id){
        return view('form.update')->with([
            'data' => $this->personnel->find($id)
        
            ]);
    }
}
