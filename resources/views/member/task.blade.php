@extends('member.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('member.sidebar')
        <div class="container">
            <div class="d-flex justify-content-between mb-5">
                <h2 class="mt-3">Tasks</h2>
                {{--                <button class="mt-3 btn btn-info mx-4"><a href="{{url('/member/add-task')}}" class="text-white text-decoration-none">Add Tasks</a></button>--}}
            </div>

            <table class="table table-hover table-striped table-bordered">
                <tr class="table-dark py-3 text-center">
                    <td>Title</td>
                    <td>Description</td>
                    <td>Project</td>
                    <td>Status</td>
                    <td>Minutes</td>
                    <td>Action</td>
                </tr>

                @foreach($tasks as $task)
                    <tr class="text-center">
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}} </td>
                        <td>{{$task->Project->title}}</td>
                        <td>
                            <button
                                class=" text-white {{ $task->status=='progress' ?   'bg-primary' : ($task->status=='canceled' ? 'bg-danger' : 'bg-success') }}">{{$task->status}}</button>
                        </td>
                        <td>
                            <button class="bg-info text-dark">{{$task->duration}}</button>
                        </td>
                        <td>
                            <a href="/member/edit-task/{{$task->id}}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            <a href="/member/delete-task/{{$task->id}}" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
