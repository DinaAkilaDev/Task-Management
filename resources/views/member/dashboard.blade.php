
@extends('member.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('member.sidebar')


<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="mb-4 mt-3">Dashboard</h2>
    </div>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
            <div class="card d-flex" >
                <div class="card-body">
                    <div style="padding: 20px;">
                        <h5 class="mb-3">{{$project->Project->title}} </h5>
                        <p class="text-secondary mb-4">
                            {{$project->Project->description}}
                        </p>
                    </div>
                    <span class="text-success">start tasks</span>
                    <span class="text-success"> 00:59</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    </main>
@endsection
