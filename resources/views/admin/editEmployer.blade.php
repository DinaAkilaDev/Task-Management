@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Edit Employer</h2>
            <form role="form" action="{{route('employerUpdate')}}" enctype="multipart/form-data" method="Post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Name</label><br>
                        <input type="text" name="name" value="{{$employee->name}}" class="name mb-5" placeholder="Name"
                               style="width:70%; padding: 10px;">
                        <input type="hidden" name="id" value="{{$employee->id}}">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Email</label><br>
                        <input type="Email" name="email" class="Email mb-5" value="{{$employee->User->email}}"
                               placeholder="Email" style="width:70% ;padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-3">mobile</label><br>
                        <input type="text" name="mobile" class="mobile mb-5" value="{{$employee->mobile}}"
                               placeholder="mobile" style="width:70% ;padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Password</label><br>
                        <input type="Password" name="password" class="Password mb-5" placeholder="Password"
                               style="width:70% ; padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Job Name</label><br>
                        <input type="text" name="job_name" class="Job mb-5" value="{{$employee->job_name}}"
                               placeholder="Job Name" style="width:70% ;padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Role</label><br>
                        <select name="role" class="form-control form-input">
                            <option value="team_leader">Team Leader</option>
                            <option value="member">Member</option>

                        </select>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Photo</label><br>
                        <input type="file" data-loading-text="Loading..."
                               name="photo" id="file"
                               class=" img-logo demo-loading-btn btn  margin-top-85">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info w-25 mt-5">update</button>
                    </div>
                </div>
            </form>
        </div>


    </main>
@endsection
