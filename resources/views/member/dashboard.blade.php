
@extends('teamleader.app')

@section('content')
    <main class="d-flex" style="background: #eee;">
        @include('teamleader.sidebar')


<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="mb-4 mt-3">Dashboard</h2>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
            <div class="card d-flex" >
                <div class="card-body">
                    <div style="padding: 20px;">
                        <h5 class="mb-3">Design Data Base </h5>
                        <p class="text-secondary mb-4">In publishing and graphic design,
                            Lorem ipsum is a placeholder text
                            commonly used to demonstrate .
                        </p>
                    </div>
                    <span class="text-success">start tasks</span>
                    <span class="text-success"> 00:59</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
            <div class="card d-flex" >
                <div class="card-body">
                    <div style="padding: 20px;">
                        <h5 class="mb-3">Car Seller</h5>
                        <p class="text-secondary mb-4">In publishing and graphic design,
                            Lorem ipsum is a placeholder text
                            commonly used to demonstrate
                        </p>
                    </div>
                    <span class="text-danger">Stop</span>
                    <span class="text-success"> 20:20</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3 " style="  border-radius: 4px;">
            <div class="card d-flex">
                <div class="card-body">
                    <div style="padding: 20px;">
                        <h5 class="mb-3">Car Seller</h5>
                        <p class="text-secondary mb-4">In publishing and graphic design,
                            Lorem ipsum is a placeholder text
                            commonly used to demonstrate
                        </p>
                    </div>
                    <span class="text-success">stop</span>
                    <span class="text-success"> 00:00</span>
                </div>
            </div>
        </div>

    </div>
</div>
    </main>
@endsection
