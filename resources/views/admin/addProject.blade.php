@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Add Project</h2>
            <form role="form" action="{{route('projectStore')}}"
                  enctype="multipart/form-data"
                  method="Post">
                @csrf
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Tittle</label><br>
                    <input type="text" class="name mb-5" placeholder="Enter Title" style="width:90%; padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Team Leader</label><br>
                    <input type="text" class="Email mb-5" placeholder="Select Team Leader" style="width:90% ;padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-3">Description</label><br>
                    <textarea name="text"  cols="20" rows="5" placeholder="Enter Description " style="width:90% ;padding: 10px;"></textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">states</label><br>
                    <input type="text" class="text mb-5" placeholder="Select states" style="width:90% ; padding: 10px;">
                </div>
            </div>
            <div>
                <button class="btn btn-info w-25 mt-5">save</button>
            </div>
            </form>
        </div>



    </main>
@endsection
