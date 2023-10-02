<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class OrganogramController extends Controller
{

public function org()
{
    $rootDepartments = Department::whereNull('parent_id')->with('children.teams.employees')->get();
    
    return view('organogram.index',compact('rootDepartments'));
}
}
