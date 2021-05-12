<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function list() {
        $employees = Employee::orderBy('surname')->paginate(10);

        return view('index', compact('employees'));
    }

    public function show($id) {

        $employee = Employee::findOrFail($id);

        return view('show',compact('employee'));
    }

    public function new() {
        return view('new');
    }

    public function add(Request $request) {

        Employee::create($request->all());

        return redirect()->route('list');
    }

    public function edit($id) {

        $employee = Employee::findOrFail($id);

        return view('edit',compact('employee'));

    }

    public function update(Request $request, $id) {

        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect()->route('list');
    }

    public function hire(Request $request, $id) {

        $employee = Employee::find($id);
        $employee->update($request->all());

        return redirect()->route('list');
    }

    public function delete($id) {

        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('list');
    }

}
