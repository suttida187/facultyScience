@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="col-8 ">
            <h1 class="mb-4">เเก้ไขข้อมูล</h1>
            <form class="row g-3" method="POST" action="{{ route('faculty-update', $query[0]->fac_id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12">
                    <label for="inputAddress" class="form-label">ชื่อคณะ</label>
                    <input type="text" class="form-control @error('fac_name') is-invalid @enderror" name="fac_name"
                        id="fac_name" value="{{ $query[0]->fac_name }}">
                    @error('fac_name')
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
