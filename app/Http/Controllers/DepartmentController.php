<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function show(Department $department){
     $categories = $department->categories;
     return view('departments.show', compact("department", "categories")); 
    }
    
}
