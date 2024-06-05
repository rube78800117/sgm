<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Department;

class CategoryController extends Controller
{
    public $department;
    //





    public function index()
    {
        return view('admin.categories.index');
    }
}
