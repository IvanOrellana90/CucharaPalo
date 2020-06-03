@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{!! url('') !!}/assets/extra-libs/prism/prism.css">
@endsection
    
@section('main')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="fb-post" data-href="https://www.facebook.com/Cucharadepalochile/posts/118801996509441"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="fb-post" data-href="https://www.facebook.com/photo/?fbid=118778126511828&set=a.110276470695327"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="fb-post" data-href="https://www.facebook.com/Cucharadepalochile/posts/119625506427090"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="fb-post" data-href="https://www.facebook.com/Cucharadepalochile/posts/119312286458412"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection

@section('js')
    <script src="{!! url('') !!}/assets/extra-libs/prism/prism.js"></script>
@endsection