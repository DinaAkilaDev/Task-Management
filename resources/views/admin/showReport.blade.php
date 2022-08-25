@extends('layouts.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('admin.sidebar')
        <div class="container">
            <div class="d-flex justify-content-between mb-5">
                <h2 class="mt-3">Report For {{$employers->name}}</h2>
                <a href="{{url('/admin/employer')}}" class=" text-decoration-none mt-3"><h4 style="color: black">Back</h4>
                </a>
            </div>

            <div id="modal" class="content ">

                <hr>
                <h4>All Project <span
                        class="text-info">{{count($projects)??0}}</span>
                </h4>
                <table class="table table-hover table-striped table-bordered">
                    <tbody>
                    <tr class="table-dark py-3 text-center">
                        <td>Completed</td>
                        <td>In Progress</td>
                        <td>Canceled</td>
                    </tr>
                    <tr class="text-center">
                        <td>{{count($completed_projects)??0}}</td>
                        <td>{{count($progress_projects)??0}}</td>
                        <td>{{count($canceled_projects)??0}}</td>
                    </tr>
                    </tbody>
                </table>
                <h4>All Tasks <span class="text-info">{{count($tasks)??0}}</span>
                </h4>
                <table class="table table-hover table-striped table-bordered">
                    <tbody>
                    <tr class="table-dark py-3 text-center">
                        <td>Completed</td>
                        <td>In Progress</td>
                        <td>Canceled</td>
                    </tr>
                    <tr class="text-center">
                        <td>{{count($completed_tasks)??0}}</td>
                        <td>{{count($progress_tasks)??0}}</td>
                        <td>{{count($canceled_tasks)??0}}</td>
                    </tr>
                    </tbody>
                </table>
                <h4>Sessions <span class="text-info">{{0}}</span></h4>
                <table class="table table-hover table-striped table-bordered">
                    <tbody>
                    <tr class="table-dark py-3 text-center">
                        <td>Days</td>
                        <td>login</td>
                        <td>logout</td>
                    </tr>
                    <tr class="text-center">
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>

    </main>
    <script>
        function openModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'block';
        }

        function closeModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
@endsection
