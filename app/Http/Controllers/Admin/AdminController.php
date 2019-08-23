<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Models\Teacher;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function verifyStudent()
    {

    }

    public function verifyTeacher()
    {
        return view('admin.teacher.index');
    }

    public function profile()
    {

    }

    public function ajaxTeacherLists()
    {
         $teacher=Teacher::all();
        if (request()->ajax()) {
            return DataTables::of($teacher)
                ->addColumn('action', function () {
                 return '--';
                })->make(true);
        }

        return response()->json([
            'message' => 'Something Went Wrong ? Try Again ! '
        ], 301);
    }
}
