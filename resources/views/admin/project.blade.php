@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <div class="d-flex justify-content-between mb-5">
                <h2 class="mt-3">Project</h2>
                <button class="mt-3 btn btn-info mx-4"><a href="{{route('projectCreate')}}"
                                                          class="text-white text-decoration-none">Add Project</a>
                </button>
            </div>

            <table class="table table-hover table-striped table-bordered">
                <tr class="table-dark py-3 text-center">
                    <td>Title</td>
                    <td>Description</td>
                    <td>Related Tasks</td>
                    <td>Team Leader</td>
                    <td>Action</td>
                </tr>
                @foreach($projects as $project)
                    <tr class="text-center">
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>
                            <button class="tasks">Show Tasks</button>
                        </td>
                        <td>
                            <button class="t-leader">{{$project->Teamleader->name}}</button>
                        </td>
                        <td>
                            <a href="/admin/edit-project/{{$project->id}}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            <a href="/admin/delete-project/{{$project->id}}" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
