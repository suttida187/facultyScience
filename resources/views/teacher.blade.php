@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-8 ">
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @include('navbarLink')
                </div>
            </nav>
            <div class="mb-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <p class="mb-0 please-enter">กรุณาป้อนชื่ออาจารย์</p>
                    </div>
                    <div class="col">
                        <form id="multiStepForm" class="multi-step-form d-flex" method="POST"
                            action="{{ route('teacher-search') }}" enctype="multipart/form-data">
                            @csrf
                            <input class="form-control me-2" type="search" placeholder="Search" name="search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col ">#</th>
                        <th scope="col">รหัส</th>
                        <th scope="col">ชื่อ นามสกุล</th>
                        <th scope="col">เบอร์โทร</th>
                        <th scope="col">ห้องสอน</th>
                        <th scope="col">เเก้ไข</th>
                        <th scope="col">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($query as $que)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $que->teacher_id }}</td>
                            <td>{{ $que->teacher_name }} {{ $que->teacher_surname }}</td>
                            <td>{{ $que->teacher_tel }}</td>
                            <td>{{ $que->teacher_room }}</td>
                            <td><a type="button" href="{{ url('teacher-edit', $que->teacher_id) }}"
                                    class="btn btn-warning">เเก้ไข</a>
                            </td>
                            <td><a type="button" href="{{ url('teacher-destroy', $que->teacher_id) }}"
                                    onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลนี้?');"
                                    class="btn btn-danger">ลบ</a>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
@endsection
