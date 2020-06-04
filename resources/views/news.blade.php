@extends('layouts.master')

@section('css')
    
@endsection
    
@section('main')

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- row -->

    // SLIDER CON IMAGENES

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div id="carouselExampleIndicators3" class="carousel slide welcome-carousel"
                        data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{!! url('') !!}/assets/images/welcome/welcome-1.jpg"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Cuchara de Palo</h3>
                                    <p>
                                        <strong>Recopilación y sistematización</strong> de la información sobre <strong>ayuda humanitaria y sanitaria</strong>
                                        que están ofreciendo organizaciones populares y ciudadanas en los diferentes
                                        territorios <strong>en atención a la pandemia que estamos viviendo</strong>.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="{!! url('') !!}/assets/images/welcome/welcome-2.jpg"
                                    alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-white">Second title goes here</h3>
                                    <p>this is the subcontent you can use this</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    // NOTICIAS DE FACEBOOK

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

    // CARTAS CON COLORES

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card-columns">
                @foreach ($data as $item)
                @php
                    $item->color = randomColor();
                @endphp
                <div class="card text-center alert-{{ $item->color }}">
                    <div class="card-body">
                        <h4 class="card-title text-{{ $item->color }}">{{ $item->c }}</h4>
                        <p class="card-text">{{ $item->f }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

@endsection

@section('js')
    
@endsection