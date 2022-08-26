@extends('teamleader.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('teamleader.sidebar')
<div class="container">
        <h2 class="mb-4 mt-3">Add Tasks</h2>
        <form role="form" action="{{route('taskStore')}}" method="Post">
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label class="mb-2">Title</label><br>
                <input type="text" name="title" class="name mb-5" placeholder="Enter Tittle" style="width:90%; padding: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label class="mb-2">Duration In Minutes</label><br>
                <input type="number" name="duration" class="Email mb-5" placeholder="enter time" style="width:90% ;padding: 10px;">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label class="mb-3">Description</label><br>
                <textarea name="description"  cols="20" rows="5" placeholder="in the project car seller.." style="width:90% ;padding: 10px;"></textarea>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label>Member</label>
                <select name="employee_id" class="form-control form-input">
                                                        @foreach($employees as $myemployee )
                                                            <option
                                                                value="{{$myemployee->id}}">{{$myemployee->name}}</option>
                                                        @endforeach
                                                    </select>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label>Project</label>
                <select name="project_id" class="form-control form-input">
                                        @foreach($projects as $myproject )
                                            <option
                                                value="{{$myproject->id}}">{{$myproject->title}}</option>
                                        @endforeach
                                    </select>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <label>status</label>
                <select name="status" class="form-control form-input">
                                            <option value="progress">progress</option>
                                            <option value="completed">completed</option>
                                            <option value="canceled">canceled</option>
                                    </select>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-info w-25 mt-5">Save</button>
        </div>
        </form>
    </div>
    </main>
    @endsection
