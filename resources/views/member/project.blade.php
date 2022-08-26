@extends('member.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('member.sidebar')
        <div class="container">
            <div class="d-flex justify-content-between mb-5">
                <h2 class="mt-3">Project</h2>
            </div>

            <table class="table table-hover table-striped table-bordered">

                <tr class="table-dark py-3 text-center">
                    <td>Title</td>
                    <td>Description</td>
                    <td>Related Tasks</td>
                </tr>
                @foreach($projects as $project)
                    <tr class="text-center">
                        <td>{{$project->Project->title}} </td>
                        <td>{{$project->Project->description}}</td>
                        <td><a href="{{url('/teamleader/show-related_task/'.$project->Project->id)}}" class="sho">Show
                                Tasks</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </main>
@endsection
