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
    public function teacherEdit($id)
    {

        $query = DB::table('teacher')
            ->where('teacher_id',  $id)
            ->get();
        return view('teacher_edit', compact('query'));
    }
    public function teacherUpdate(Request $request, $id)
    {

        $request->validate([
            'teacher_name' => 'required|string|max:50',
            'teacher_surname' => 'required|string|max:50',
            'teacher_tel' => 'nullable|string|max:50',
            'teacher_room' => 'nullable|string|max:8', // เพิ่มการตรวจสอบนี้
        ]);

        DB::table('teacher')->where('teacher_id', $id)->update([
            'teacher_name' => $request->teacher_name,
            'teacher_surname' => $request->teacher_surname,
            'teacher_tel' => $request->teacher_tel,
            'teacher_room' => $request->teacher_room,
        ]);

        // ส่งกลับหลังจากอัปเดต
        return redirect()->route('teacher')->with('success', 'ข้อมูลถูกอัปเดตเรียบร้อยแล้ว');
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
