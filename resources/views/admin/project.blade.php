@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
<div class="container">
    <div class="d-flex justify-content-between mb-5">
        <h2 class="mt-3">Project</h2>
        <button class="mt-3 btn btn-info mx-4"><a href="{{route('projectCreate')}}" class="text-white text-decoration-none">Add Project</a></button>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <tr class="table-dark py-3 text-center">
            <td>Title</td>
            <td>Description</td>
            <td>Related Tasks</td>
            <td>Team Leader</td>
            <td>Action</td>
        </tr>

        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><button class="tasks">Show Tasks</button></td>
            <td><button class="t-leader">hamza</button></td>
            <td>
                <a href="Edit-Project.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><button class="tasks">Show Tasks</button></td>
            <td><button class="t-leader">Ahmed</button></td>
            <td>
                <a href="Edit-Project.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td ><button class="tasks">Show Tasks</button></td>
            <td><button class="t-leader">hamza</button></td>
            <td>
                <a href="Edit-Project.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><button class="tasks">Show Tasks</button></td>
            <td><button class="t-leader">Ahmed</button></td>
            <td>
                <a href="Edit-Project.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td ><button class="tasks">Show Tasks</button></td>
            <td><button class="t-leader">hamza</button></td>
            <td>
                <a href="Edit-Project.html" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    </table>
</div>
    </main>
@endsection
