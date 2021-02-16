<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
Use Redirect;
class DepartmentController extends Controller
{
    public function __construct(Department $department, Request $request)

    {
        $this->department = $department;
        $this->request   = $request;

    }

    public function index()
    {
        return view('pages.department.department')->with([
            
            'departments' => $this->department
                        ->all()
        ]);
    }

    public function createform()
    {
      return view('pages.add_dep');
    }

    public function saveform() 
    {        
        $this->department->create(
        $this->request->except('_token')
        );

        return Redirect::route('indexpage')->with([
        'success' => 'Has been Save!'
        ]);
    }
    public function updateform($id)
        {
            return view('pages.department.update')->with([
                'department' => $this->department->find($id)
            ]);
        }

    public function updateformsave($id)
        {
            $this->department->find($id)->update(
            $this->request->except('_token')
            );
            return Redirect::route('indexpage')->with([
                'success' => 'Has been Updated!'
            ]);
        }
        public function deletedata($id)
        {
            $this->department->find($id)->delete();
            return Redirect::route('indexpage')->with([
                'success' => 'Has been Deleted!'
            ]);
        }

}
