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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->c }}</td>
                                    <td>{{ $item->f }}</td>
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
        <div class="col-md-6">
            <div class="card border-primary text-center">
                <div class="card-header bg-warning">
                </div>
                <div class="card-body alert-warning">
                    <h3 class="card-title text-warning">Ingresar iniciativas</h3>
                    <p class="card-text">Estamos creando un catastro de iniciativas de asistencia para facilitar el acceso a la información y ayudar a la coordinación popular frente a la pandemia </p>
                    <a href="https://bit.ly/cucharadepaloregistro" class="btn btn-warning">Ingresar iniciativa</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-primary text-center">
                <div class="card-header bg-primary">
                </div>
                <div class="card-body alert-primary">
                    <h3 class="card-title text-primary">Nuevos voluntarios</h3>
                    <p class="card-text">Estamos creciendo y necesitamos ayuda! Tenemos más de 600 iniciativas recopiladas y estamos armando nuevos equipos de trabajo.</p>
                    <a href="#bs-example-modal-lg-voluntarios" data-toggle="modal" class="btn btn-primary">Ver formulario</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

    <!-- Modal HTML Voluntarios -->
    <div class="modal fade" id="bs-example-modal-lg-voluntarios" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="javascript:void(0)" method="POST">
                    <div class="modal-header">
                        <h4>Formulario para voluntarios</h4>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary" role="alert">
                            Estamos construyendo <strong>Cuchara de Palo</strong>, una plataforma colaborativa para canalizar la información necesaria 
                            para superar esta crisis y potenciar la colaboración y la <strong>organización popular</strong>. Estamos creciendo y 
                            necesitamos ayuda en nuestros distintos equipos de trabajo: Manejo de la base de datos, recopilación 
                            de información, redes sociales, relaciones públicas, contacto con las organizaciones, entre otros.
                        </div>
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" placeholder="Ingrese su nombre completo" required>
                        </div>
                        <div class="form-group">
                            <label for="inputApellido">Apellido</label>
                            <input type="text" class="form-control" id="inputApellido" placeholder="Ingrese sus apellidos" required>
                        </div>
                        <div class="form-group">
                            <label for="inputRut">RUT</label>
                            <input type="text" class="form-control" id="inputRut" placeholder="12345678-9" required>
                            <small id="emailHelp" class="form-text text-muted">En caso de no tener RUT puede escribir su número de pasaporte.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputCiudad">Ciudad</label>
                            <input type="text" class="form-control" id="inputCiudad" placeholder="Ciudad" required>
                            <small id="emailHelp" class="form-text text-muted">Ingrese la ciudad en donde puede llevar a cabo el voluntariado.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputOcupacion">Ocupación</label>
                            <input type="text" class="form-control" id="inputOcupacion" placeholder="Ingrese su ocupación o formación">
                        </div>
                        <div class="form-group">
                            <label for="inputTelefono">Teléfono</label>
                            <input type="text" class="form-control" id="inputTelefono" placeholder="Ingrese su teléfono de contacto" required>
                        </div>
                        <div class="form-group">
                            <label for="inputCorreo">Correo</label>
                            <input type="email" class="form-control" id="inputCorreo" placeholder="Ingrese su correo de contacto" required>
                        </div>
                        <div class="form-group">
                            <label for="inputRedSocial">Red Social</label>
                            <input type="text" class="form-control" id="inputRedSocial" placeholder="Ingrese alguna red social de contacto">
                        </div>
                        <div class="form-group">
                            <label for="inputDisponibilidad">Disponibilidad</label>
                            <input type="number" class="form-control" id="inputDisponibilidad" placeholder="Número de horas disponibles a la semana" required>
                            <small id="emailHelp" class="form-text text-muted">Cuentanós cuantas horas tienes disponibles a la semana.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!--  Modal content for the above example -->
     @foreach ($data as $item)
     <div class="modal fade rounded" id="bs-example-modal-lg-{{ $item->id }}" tabindex="-1" role="dialog"
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
                 <div class="modal-footer">
                    <p>
                        Si te gustaría complementar, modificar o tienes algo que decir sobre esta 
                        iniciativa. Por favor escríbenos a: <a href="mailto:registro.cucharadepalo@gmail.com">registro.cucharadepalo@gmail.com</a>
                    </p>
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