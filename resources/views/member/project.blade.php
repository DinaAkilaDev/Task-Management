
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

        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Related Tasks in projects For User.html" class="sho">Show Tasks</a></td>
        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><a href="Related Tasks in projects For User.html" class="sho">Show Tasks</a></td>
        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Related Tasks in projects For User.html" class="sho">Show Tasks</a></td>

        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><a href="Related Tasks in projects For User.htmll" class="sho">Show Tasks</a></td>

        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Related Tasks in projects For User.html" class="sho">Show Tasks</a></td>
        </tr>
    </table>
</div>
    </main>
@endsection
