@extends('teamleader.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('teamleader.sidebar')

        <div class="container">
            <h2 class="mb-4 mt-3">Edit Profile</h2>

            <form role="form" action="{{route('teamleaderUpdate')}}" enctype="multipart/form-data" method="Post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Name</label><br>
                        <input type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="Name mb-5" placeholder="Name" style="width:90%; padding: 10px;">
                        <input type="hidden" name="id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}"  >
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Email</label><br>
                        <input type="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="Email mb-5" placeholder="Email" style="width:90% ;padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Password</label><br>
                        <input type="password" name="password"  class="Email mb-5" placeholder="Password" style="width:90% ;padding: 10px;">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <label class="mb-2">Photo</label><br>
                        <input type="file" data-loading-text="Loading..."
                               name="photo" id="file"
                               class=" img-logo demo-loading-btn btn  margin-top-85">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-info w-25 mt-5">Save</button>
                    </div>
                </div>
            </form>
        </div>


    </main>
@endsection
