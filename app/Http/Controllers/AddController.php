<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        $employeeAllData=Add::latest()->get();
        return view('index',compact('employeeAllData'));
    }
    public function add(Request $request): RedirectResponse
    {
        Add::create($request->only('name', 'email', 'address', 'mobile', 'dob', 'designation', 'salary'));
        return  redirect()->route("index")->with('success','Your info added successfully in Database');
    }

    public function destroy(int $id): RedirectResponse
    {
        Add::where('id', $id)->delete();
        return redirect()->route("index")->with('success','Your info deleted  successfully in Database');
    }
    public function update(Request $request): RedirectResponse
    {
        Add::where('id', $request->id)->update($request->only('name', 'email', 'address', 'mobile', 'dob', 'designation', 'salary'));
        return redirect()->route("index")->with('success','Your info updated   successfully in Database');
    }

}
