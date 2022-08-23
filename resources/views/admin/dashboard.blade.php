
<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="mb-4 mt-3">Dashboard</h2>
        <button class="mt-3 btn btn-success  mx-4 mb-3"><a href="{{route('projectCreate')}}" class="text-white text-decoration-none">+ Add Project</a></button>
    </div>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
            <div class="card d-flex" style="border:1px solid {{ $project->status=='progress' ?   'orange' : ($project->status=='canceled' ? 'red' : 'green') }}" >
                <div class="card-body">
                    <div style="padding: 20px;">
                        <h5 class="mb-3">{{$project->title}} <span class="m-lg-3" style="color:{{ $project->status=='progress' ?   'orange' : ($project->status=='canceled' ? 'red' : 'green') }}" >{{$project->status}}</span></h5>
                        <p class="text-secondary mb-4">{{$project->description}}
                        </p>
                    </div>
                    <div class="mx-4 mb-4 ">

                        <div class="d-flex " >
                            <img src="https://placekitten.com/40/40" alt="" style="border-radius: 50%;">
                        <div class="mt-2 m-lg-1" >{{$project->Teamleader->name}}</div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

