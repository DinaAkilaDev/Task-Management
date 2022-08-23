@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">Add Project</h2>
            <form role="form" action="{{route('projectStore')}}" method="Post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Title</label><br>
                    <input type="text" name="title" class="name mb-5" placeholder="Enter Title" style="width:90%; padding: 10px;">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">Team Leader</label><br>
{{--                    <input type="text" name="team_leader_id" class="Email mb-5" placeholder="Select Team Leader" style="width:90% ;padding: 10px;">--}}
                    <select name="team_leader_id" class="form-control form-input">
                        @foreach($teamLeader as $myteamLeader )
                            <option
                                value="{{$myteamLeader->id}}">{{$myteamLeader->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-3">Description</label><br>
                    <textarea type="text" name="description"  cols="20" rows="5" placeholder="Enter Description " style="width:90% ;padding: 10px;"></textarea>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <label class="mb-2">status</label><br>
{{--                    <input type="text" name="description" class="text mb-5" placeholder="Select states" style="width:90% ; padding: 10px;">--}}
                    <select name="status" class="form-control form-input">
                            <option value="progress">progress</option>
                            <option value="completed">completed</option>
                            <option value="canceled">canceled</option>
                    </select>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-info w-25 mt-5">save</button>
            </div>
            </form>
        </div>



    </main>
@endsection
