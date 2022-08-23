@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
<div class="container">
    <div class="d-flex justify-content-between mb-5">
        <h2 class="mt-3">Employer</h2>
        <button class="mt-3 btn btn-info mx-4"><a href="{{route('employerCreate')}}" class="text-white text-decoration-none">Add Employer</a></button>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <tr class="table-dark py-3 text-center">
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
            <td>Report</td>
            <td>Action</td>
        </tr>
        @foreach($employers as $employer)
        <tr class="text-center">
            <td>{{$employer->name}}</td>
            <td>{{$employer->User->email}}</td>
            <td><button class="leader" style="background:{{ $employer->role=='team_leader' ?   'gold' : '#0dcaf0' }}" >{{$employer->role}}</button></td>
            <td><button class="bg-info text-white">Show Report</button></td>
            <td>
                <a href="/admin/edit-employer/{{$employer->id}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="/admin/delete-employer/{{$employer->id}}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endforeach

    </table>
</div>
    </main>
@endsection
