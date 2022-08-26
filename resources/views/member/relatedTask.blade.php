@extends('member.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('member.sidebar')
        <div class="container">
            <h2 class="mb-4 mt-3">{{$employer}}</h2>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="card d-flex" style="height: 70vh; background: #eee;">
                        <div class="d-flex justify-content-between ">
                            <h4 class="mx-2 mt-2">{{$project->title}}</h4>
                            {{--                    <button class="btn btn-success mt-2 mx-3">+Add Tasks</button>--}}
                        </div>
                        <div class="card-body">
                            @foreach($tasks as $task)
                                <div class="p-2 mb-2" style="background: #fff; border: 1px solid green;">
                                    <p>{{$task->title}} </p>
                                    <button
                                        class=" text-white {{ $task->status=='progress' ?   'bg-primary' : ($task->status=='canceled' ? 'bg-danger' : 'bg-success') }}">{{$task->status}}</button>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
