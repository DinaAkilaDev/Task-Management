@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Edit Profile</h2>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Name</label><br>
                    <input type="text" class="Name mb-5" placeholder="Name" style="width:90%; padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Email</label><br>
                    <input type="text" class="Email mb-5" placeholder="Email" style="width:90% ;padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Phots</label><br>
                    <input type="file" class="text mb-5 form-control" placeholder="Upload Phots" style="width:90% ; padding: 10px;">
                </div>
            </div>
            <div>
                <button class="btn btn-info w-25 mt-5">Save</button>
            </div>
        </div>


    </main>
@endsection
