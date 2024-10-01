@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-8 ">
            <h1 class="mb-4">เเก้ไขข้อมูล</h1>
            <form class="row g-3" method="POST" action="{{ route('teacher-update', $query[0]->teacher_id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control @error('teacher_name') is-invalid @enderror"
                        name="teacher_name" id="teacher_name" value="{{ $query[0]->teacher_name }}">
                    @error('teacher_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputAddress"
                        class="form-label @error('teacher_surname') is-invalid @enderror">นามสกุล</label>
                    <input type="text" class="form-control" name="teacher_surname" id="teacher_surname"
                        value="{{ $query[0]->teacher_surname }}">
                    @error('teacher_surname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-8">
                    <label for="inputAddress" class="form-label @error('teacher_tel') is-invalid @enderror">เบอร์โทร</label>
                    <input type="text" class="form-control" name="teacher_tel" id="teacher_tel"
                        value="{{ $query[0]->teacher_tel }}">
                    @error('teacher_tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputAddress" class="form-label">ห้อวสอน</label>
                    <input type="text" class="form-control @error('teacher_room') is-invalid @enderror"
                        name="teacher_room" id="teacher_room" value="{{ $query[0]->teacher_room }}">
                    @error('teacher_room')
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
