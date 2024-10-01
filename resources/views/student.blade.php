<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link href="{{ URL::asset('bootstrap.css') }}" rel="stylesheet">
</head>

<body>
    <div class="justify-content-center">
        <div class="col-8 ">
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @include('navbarLink')
                </div>
            </nav>
            <div class="mb-3">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <p class="mb-0 please-enter">กรุณาป้อนชื่อคณะ</p>
                    </div>
                    <div class="col">
                        <form id="multiStepForm" class="multi-step-form d-flex" method="POST"
                            action="{{ route('student-search') }}" enctype="multipart/form-data">
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
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($query as $que)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $que->student_id }}</td>
                            <td>{{ $que->student_name }} {{ $que->student_surna }}</td>
                            <td>{{ $que->me }}</td>
                            <td>{{ $que->student_tel }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
</body>

</html>
