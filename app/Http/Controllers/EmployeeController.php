<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreEmployeeRequest;
use Exception;
use Illuminate\Contracts\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index():View
    {   
        $employees = Employee::all();
        return view('admin.employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreEmployeeRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreEmployeeRequest $request):RedirectResponse
    {
        try {
            $employee = Employee::create($request->validated());
            if ($employee) {
                return redirect()->route('employee.index');
            }
            else {
                return back();
            }
        } catch (Exception $ex) {
            return back($ex->getMessage());
        }
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
     * @param  Employee $employee
     * @return View
     */
    public function edit(Employee $employee):View
    {
        return view('admin.employees.edit')->with('$employee', $employee);    
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
