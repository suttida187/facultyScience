<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaculController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return redirect()->route('faculty');
    }


    public function student(Request $request)
    {
        $search = $request->search;
        $query = DB::table('student');

        if ($request->all()) {
            $query = $query
                ->where('student_name', 'LIKE', "%$search%")
                ->orWhere('student_id', 'LIKE', "%$search%")
                ->orWhere('student_surna', 'LIKE', "%$search%")
                ->orWhere('me', 'LIKE', "%$search%")
                ->orWhere('student_tel', 'LIKE', "%$search%")
                ->get();
        } else {
            $query = $query
                ->get();
        }
        return view('student', compact('query'));
    }
    public function teacher(Request $request)
    {
        $search = $request->search;
        $query = DB::table('teacher');
        if ($request->all()) {
            $query = $query
                ->where('teacher_name', 'LIKE', "%$search%")
                ->orWhere('teacher_id', 'LIKE', "%$search%")
                ->orWhere('teacher_surname', 'LIKE', "%$search%")
                ->orWhere('teacher_tel', 'LIKE', "%$search%")
                ->orWhere('teacher_room', 'LIKE', "%$search%")
                ->get();
        } else {
            $query = $query
                ->get();
        }
        return view('teacher', compact('query'));
    }
    public function faculty(Request $request)
    {

        $search = $request->search;
        $query = DB::table('faculty');

        if ($request->all()) {
            $query = $query
                ->where('fac_name', 'LIKE', "%$search%")
                ->orWhere('fac_id', 'LIKE', "%$search%")
                ->get();
        } else {
            $query = $query
                ->get();
        }

        return view('welcome', compact('query'));
    }
}
