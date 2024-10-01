@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-8 ">
            <h1 class="mb-4">เเก้ไขข้อมูล</h1>
            <form class="row g-3" method="POST" action="{{ route('student-update', $query[0]->student_id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control @error('teacher_name') is-invalid @enderror"
                        name="student_name" id="student_name" value="{{ $query[0]->student_name }}">
                    @error('student_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputAddress"
                        class="form-label @error('student_surname') is-invalid @enderror">นามสกุล</label>
                    <input type="text" class="form-control" name="student_surname" id="student_surname"
                        value="{{ $query[0]->student_surname }}">
                    @error('student_surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label">เบอร์โทร</label>
                    <input type="text" class="form-control @error('student_tel') is-invalid @enderror" name="student_tel"
                        id="student_tel" value="{{ $query[0]->student_tel }}">
                    @error('student_tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
