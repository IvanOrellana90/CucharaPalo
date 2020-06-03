@extends('layouts.master')

@section('css')
    <link href="{!! url('') !!}/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection

@section('main')
    
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Lugar</th>
                                    <th>Apoyo</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->a. " " .$item->b }}</td>
                                    <td>{{ $item->d }}</td>
                                <td><a href="javascript:void(0)" data-toggle="modal" data-target="#bs-example-modal-lg-{{ $item->id }}">
                                            <i class="fas fa-search"></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card-columns">
                <div class="card border-primary">
                    <div class="card-header bg-warning">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Ingresar iniciativas</h3>
                        <p class="card-text">¡Ayudanos a crear una gran red de apoyo y coordinación popular ante la emergencia!</p>
                        <a href="https://bit.ly/cucharadepaloregistro" class="btn btn-secondary">Ingresar formulario</a>
                    </div>
                </div>
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Quieres ayudar?</h3>
                        <p class="card-text">Si quieres ayudar y no sabes dónde, entra a nuestro link en la bio y tendrás más de 500 iniciativas a las cuales ayudar.</p>
                        <a href="javascript:void(0)" class="btn btn-secondary">Iniciativas</a>
                    </div>
                </div>
                <div class="card border-primary">
                    <div class="card-header bg-success">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Formulario Ingreso</h3>
                        <p class="card-text">Si quieres ser parte de cuchara de palo dejanos tu información.</p>
                        <a href="javascript:void(0)" class="btn btn-secondary">Formulario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!--  Modal content for the above example -->
    @foreach ($data as $item)
        <div class="modal fade" id="bs-example-modal-lg-{{ $item->id }}" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">{{ $item->c }}</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        @if ($item->f != "")
                            <h6 class="font-weight-bold">Descripción</h6>
                            <p>{{ $item->f }}</p>
                            <hr>
                        @endif
                        @if ($item->a != "")
                        <h6 class="font-weight-bold">Regiones sobre las que actúa la organización:</h6>
                        <p>{{ $item->a }}</p>
                        @endif
                        @if ($item->b != "")
                        <h6 class="font-weight-bold">Comunas donde presta apoyo:</h6>
                        <p>{{ $item->b }}</p>
                        @endif
                        @if ($item->d != "")
                        <h6 class="font-weight-bold">Tipos de apoyo que realiza:</h6>
                        <p>{{ $item->d }}</p>
                        @endif
                        @if ($item->e != "")
                        <h6 class="font-weight-bold">A quiénes apoya la organización:</h6>
                        <p>{{ $item->e }}</p>
                        @endif
                        @if ($item->g != "")
                        <h6 class="font-weight-bold">Redes Sociales:</h6>
                        <p>{{ $item->g }}</p>
                        @endif
                        @if ($item->h != "")
                        <h6 class="font-weight-bold">Sitio Web:</h6>
                        <p><a href="{{ $item->h }}">{{ $item->h }}</a></p>
                        @endif
                        @if ($item->i != "")
                        <h6 class="font-weight-bold">Correo:</h6>
                        <p><a href="mailto:{{ $item->i }}">{{ $item->i }}</a></p>
                        @endif
                        @if ($item->j != "")
                        <h6 class="font-weight-bold">Teléfono:</h6>
                        <p>{{ $item->j }}</p>
                        @endif
                        @if ($item->k != "")
                        <h6 class="font-weight-bold">Dirección:</h6>
                        <p>{{ $item->k }}</p>
                        @endif
                        @if ($item->l != "")
                        <h6 class="font-weight-bold">Limites territoriales:</h6>
                        <p>{{ $item->l }}</p>
                        @endif
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->    
    @endforeach

@endsection

@section('js')
    <script src="{!! url('') !!}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{!! url('') !!}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection