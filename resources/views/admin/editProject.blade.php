@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Edit Project</h2>
            <form role="form" action="{{route('projectUpdate')}}" method="Post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Title</label><br>
                    <input type="text" value="{{$project->title}}" name="title" class="name mb-5"  style="width:90%; padding: 10px;">
                    <input type="hidden" value="{{$project->id}}" name="id" >
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Team Leader</label><br>
                    <select name="team_leader_id" class="form-control form-input">
                        @foreach($teamLeader as $myteamLeader )
                            <option
                                value="{{$myteamLeader->id}}">{{$myteamLeader->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-3">Description</label><br>
                    <textarea type="text"  name="description"  cols="20" rows="5"  style="width:90% ;padding: 10px;">
                        {{$project->description}}
                    </textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">status</label><br>
                    <select name="status" class="form-control form-input">
                        <option value="progress">progress</option>
                        <option value="completed">completed</option>
                        <option value="canceled">canceled</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-info w-25 mt-5">Save</button>
                </div>
            </div>
            </form>
        </div>



    </main>
@endsection
