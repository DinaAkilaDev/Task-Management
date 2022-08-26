@extends('teamleader.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('teamleader.sidebar')

        <div class="container">
            <div class="d-flex justify-content-between">
                <h2 class="mb-4 mt-3">Dashboard</h2>
            </div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
                        <div class="card d-flex"
                             style="border:1px solid {{ $project->status=='progress' ?   'orange' : ($project->status=='canceled' ? 'red' : 'green') }}">
                            <div class="card-body">
                                <div style="padding: 20px;">
                                    <h4 class="mb-3">{{$project->title}}
{{--                                        <span class="m-lg-3"--}}
{{--                                                                               style="color:{{ $project->status=='progress' ?   'orange' : ($project->status=='canceled' ? 'red' : 'green') }}">{{$project->status}}</span>--}}
                                    </h4>
                                    <p class="text-secondary mb-4">{{$project->description}}
                                    </p>
                                </div>
                                <div class="mx-4 mb-4 ">

                                    <a href="{{url('/teamleader/add-task')}}"  class="btn btn btn-outline-success ">Add Tasks +</a>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </main>
@endsection
