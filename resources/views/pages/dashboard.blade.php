@extends('layouts.app')

@section('content')
    <x-page-title title="Dashboard" :breadcrumb-items="['index' => 'Home', 'active' => 'Dashboard']"/>

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <x-dashboard-card title="Sales" sub-title="Today">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6>345</h6>
                            <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                        </div>
                    </x-dashboard-card>

                    <x-dashboard-card title="Revenue" sub-title="This Month">
                        <h1>Hello World!</h1>
                    </x-dashboard-card>
                </div>
            </div>
            <!-- End Left side columns -->
        </div>
    </section>
@endsection