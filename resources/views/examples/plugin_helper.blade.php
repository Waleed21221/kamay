@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/slick-carousel/slick.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){ Dashmix.helpers('slick'); });</script>
@endsection

@section('content')
    <!-- Hero -->
<div class="row justify-content-center py-sm-3 py-md-5">
                    <!-- Elements -->
                
                    <div class="block block-rounded block-bordered col-md-6">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Kamay</h3>
                        </div>
                        <div class="block-content">
                            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                                <!-- Basic Elements -->
                                <h2 class="content-heading pt-0">Supervisor Registration</h2>
                                <div class="row push">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input">First Name</label>
                                            <input type="text" class="form-control" id="example-text-input" name="name" placeholder="Text Input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input">Home Address</label>
                                            <input type="text" class="form-control" id="example-text-input" name="address" placeholder="Text Input">
                                        </div>     
                                        <div class="form-group">
                                            <label for="example-text-input">NIC</label>
                                            <input type="text" class="form-control" id="example-text-input" name="nic" placeholder="Text Input">
                                        </div>                                                                           
                                        <div class="form-group">
                                            <label for="example-email-input">Email</label>
                                            <input type="email" class="form-control" id="example-email-input" name="example-email-input" placeholder="Emai Input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password-input">Password</label>
                                            <input type="password" class="form-control" id="example-password-input" name="example-password-input" placeholder="Password Input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input">Contact Number</label>
                                            <input type="text" class="form-control" id="example-text-input" name="contact" placeholder="Text Input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input">Area Territory</label>
                                            <input type="text" class="form-control" id="example-text-input" name="contact" placeholder="Text Input">
                                        </div>
                                      
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1">
                                                <label class="form-check-label" for="example-checkbox-inline1">Police Varification</label>
                                            </div>

                                        <div class="col-lg-8 col-xl-5 pull-right">
                                            <div class="form-group">
                                            <label class="d-block" for="example-file-input">Select Picture</label>
                                            <input type="file" id="example-file-input" name="example-file-input">
                                        </div>
                                    </div>

                                    <div class="custom-control custom-switch custom-control-lg mb-2">
                                            <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg1" name="example-sw-custom-lg1" checked>
                                            <label class="custom-control-label" for="example-sw-custom-lg1">Terms & Condition</label>
                                    </div>

                                    <button type="submit" class="btn btn-sm btn-success">
                                            <i class="fa fa-check"></i> Submit
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    <!-- END Page Content -->
@endsection
