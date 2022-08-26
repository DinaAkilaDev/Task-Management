@extends('member.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('member.sidebar')
<div class="container">
    <h2 class="mb-4 mt-3">Edit Tasks</h2>
    <form role="form" action="{{route('membertaskUpdate')}}" method="Post">
        @csrf
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <label>status</label>
            <input type="hidden" value="{{$task->id}}" name="id" >
            <input type="hidden" value="{{$task->title}}" name="title" >
            <input type="hidden" value="{{$task->description}}" name="description" >
            <input type="hidden" value="{{$task->duration}}" name="duration" >
            <input type="hidden" value="{{$task->Project->id}}" name="project_id" >
            <input type="hidden" value="{{$task->Employee->id}}" name="employee_id" >
            <select name="status" class="form-control form-input">
                <option value="progress">progress</option>
                <option value="completed">completed</option>
                <option value="canceled">canceled</option>
            </select>
        </div>
    </div>

    <div>
        <button type="submit" class="btn btn-info w-25 mt-5">Edit</button>
    </div>
    </form>
</div>
    </main>
@endsection
