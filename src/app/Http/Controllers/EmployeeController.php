<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')
            ->whereSalaryOrPosition(500,'программист')
            ->get();
        return view('employee.index', ['employees' => $employees]);
    }
}
