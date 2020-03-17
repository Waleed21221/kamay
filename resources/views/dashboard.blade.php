@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <!-- <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
       </div>
    </div> -->
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
    <div class="bg-dark">

    <div class="bg-black-25">
        <div class="content content-full">
            <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 text-white mb-2">Dashboard</h1>
                        <h2 class="font-size-lg font-w400 text-white-75 mb-0">Today is a great one!</h2>
                    </div>
                </div>
                </div>
        </div>
        <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">

    </div>
</div>

<!-- Page Content -->
<div class="bg-dark">
    <div class="content">
        <!-- Quick Stats -->
        <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.sparkline() -->
        <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
        <div class="row">
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                                Total No Of Works
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                +350
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                                Revenue
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                +20M
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="400">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                                No Of Services Type
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                               6
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

         <div class="row">
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                                Canceled Service Requests
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                97
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="200">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                                Worker Cancel work
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                                30
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-xl-4 invisible" data-toggle="appear" data-timeout="400">
                <a class="block block-rounded block-transparent bg-black-25" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                        <div class="ml-4 ">
                            <p class="text-white-75 mb-0">
                               Schedule Works
                            </p>
                            <p class="font-size-h3 font-w300 text-body-color-light mb-0">
                               12
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        </div>

      <!--DATA TABLES-->
       <div class="col-md-6 d-md-flex align-items-md-center">
                    <div class="py-4 py-md-0 text-center text-md-left invisible" data-toggle="appear">
                        <h1 class="font-size-h2 text-white mb-2">Recent Work</h1>
                    </div>
                </div>

        <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded block-bordered">

        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">Work ID</th>
                        <th>Work</th>
                        <th class="d-none d-sm-table-cell" style="width: 30%;">Work Details</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Status</th>
                        <th style="width: 15%;">Booked</th>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->

    </div>
</div>
<!-- END Page Content -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-xl-5">
                <div class="block block-rounded block-bordered">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Welcome to your app</h3>
                    </div>
                    <div class="block-content">
                        <p>
                            We’ve put everything together, so you can start working on your Laravel project as soon as possible! Dashmix assets are integrated and work seamlessly with Laravel Mix, so you can use the npm scripts as you would in any other Laravel project.
                        </p>
                        <p>
                            Feel free to use any examples you like from the full versions to build your own pages. <strong>Wish you all the best and happy coding!</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
