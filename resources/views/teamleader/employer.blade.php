@extends('teamleader.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('teamleader.sidebar')
        <div class="container">
            <div class="d-flex justify-content-between mb-5">
                <h2 class="mt-3">Employer</h2>
                <button class="mt-3 btn btn-info mx-4"><a href="{{route('employerCreate')}}"
                                                          class="text-white text-decoration-none">Add Employer</a>
                </button>
            </div>

            <table class="table table-hover table-striped table-bordered">
                <tr class="table-dark py-3 text-center">
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Report</td>
                    <td>Action</td>
                </tr>
                @foreach($employers as $employer)

                    <tr class="text-center">
                        <td>{{$employer->name}}</td>

                        <td>{{$employer->User->email}}</td>
                        <td>
                            <button class="leader"
                                    style="background:{{ $employer->role=='team_leader' ?   'gold' : '#0dcaf0' }}">{{$employer->role}}</button>
                        </td>
                        <td>
                            {{--                            <button type="button" onclick="openModal()" class="bg-info text-white">Show Report</button>--}}
                            <a href="/admin/show-employer_report/{{$employer->id}}" style="color: black" class=" text-decoration-none">Show Report</a>
                            {{--                            <div id="modal" class="content " style="display: none; position: absolute; background-color: white; padding: 39px;">--}}
                            {{--                                <div class="d-flex">--}}
                            {{--                                    <h4>Report For {{$employer->name}}</h4>--}}
                            {{--                                    <button type="button" onclick="closeModal()" style="margin-left: 98px;margin-top: -6px;" class="bg-info text-white">X</button>--}}
                            {{--                                </div>--}}

                            {{--                                <hr>--}}
                            {{--                                <h4>All Project <span class="text-info">{{is_array($employer->Projectleader) ? count($employer->Projectleader) : 0}}</span></h4>--}}
                            {{--                                <table class="table table-hover table-striped table-bordered">--}}
                            {{--                                    <tbody>--}}
                            {{--                                    <tr class="table-dark py-3 text-center">--}}
                            {{--                                        <td>Completed</td>--}}
                            {{--                                        <td>In Progress</td>--}}
                            {{--                                        <td>Canceled</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    <tr class="text-center">--}}
                            {{--                                        <td>{{$employer->Projectleader}}</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    </tbody>--}}
                            {{--                                </table>--}}
                            {{--                                <h4>All Tasks <span class="text-info">{{is_array($employer->Task) ? count($employer->Task) : 0}}</span></h4>--}}
                            {{--                                <table class="table table-hover table-striped table-bordered">--}}
                            {{--                                    <tbody>--}}
                            {{--                                    <tr class="table-dark py-3 text-center">--}}
                            {{--                                        <td>Completed</td>--}}
                            {{--                                        <td>In Progress</td>--}}
                            {{--                                        <td>Canceled</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    <tr class="text-center">--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    </tbody>--}}
                            {{--                                </table>--}}
                            {{--                                <h4>Sessions <span class="text-info">10</span></h4>--}}
                            {{--                                <table class="table table-hover table-striped table-bordered">--}}
                            {{--                                    <tbody>--}}
                            {{--                                    <tr class="table-dark py-3 text-center">--}}
                            {{--                                        <td>Days</td>--}}
                            {{--                                        <td>login</td>--}}
                            {{--                                        <td>logout</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    <tr class="text-center">--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                        <td>4</td>--}}
                            {{--                                    </tr>--}}
                            {{--                                    </tbody>--}}
                            {{--                                </table>--}}
                            {{--                            </div>--}}

                        </td>
                        <td>
                            <a href="/admin/edit-employer/{{$employer->id}}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            <a href="/admin/delete-employer/{{$employer->id}}" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>

    </main>
    <script>
        function openModal(){
            var modal=document.getElementById('modal');
            modal.style.display = 'block';
        }
        function closeModal(){
            var modal=document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
@endsection
