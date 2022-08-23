@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Edit Employer</h2>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Name</label><br>
                    <input type="text" class="name mb-5" placeholder="Name" style="width:70%; padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Email</label><br>
                    <input type="Email" class="Email mb-5" placeholder="Email" style="width:70% ;padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-3">mobile</label><br>
                    <input type="text" class="mobile mb-5" placeholder="mobile" style="width:70% ;padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Password</label><br>
                    <input type="Password" class="Password mb-5" placeholder="Password" style="width:70% ; padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Job Name</label><br>
                    <input type="text" class="Job mb-5" placeholder="Job Name" style="width:70% ;padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2" >Role</label><br>
                    <input type="text" class="Role mb-5" placeholder="Select Role" style="width:70% ;padding: 10px;">
                </div>
            </div>
            <div>
                <button class="btn btn-info w-25 mt-5">update</button>
            </div>
        </div>



    </main>
@endsection
