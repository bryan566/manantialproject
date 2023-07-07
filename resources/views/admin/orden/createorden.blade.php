@extends('admin.layouts.sistema')

@section('admin')
<!-- Page Header -->
<div class="bg-dark">
    <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->

        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title text-white">Agregar Pedido</h1>
            </div>
            <!-- End Col -->

        </div>

        <!-- End Page Header -->
    </div>
</div>
<!-- End Content -->

<!-- Content -->
<div class="content container-fluid" style="margin-top: -18rem;">
    <!-- Card -->

    <div class="row">

        <div class="col-lg-12">
            <!-- Card -->
            <div class="card">
                <!-- Body -->
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif


                    <form method="post" action="{{ route('storeorden') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="text" class="form-label">Nombre del Cliente</label>
                                    <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Digita Nombre del Cliente" aria-label="clarice@site.com">
                                </div>
                            </div>

                            <!--<div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Servicio</label>
                                    <input type="text" class="form-control" name="servicio" id="servicio" placeholder="Selecciona el Servicio" aria-label="clarice@site.com">

                                </div>
                            </div>-->

                        

                            <div class="col-sm-4">
                                <div class="mb-4">

                                    <label for="lastNameLabel" class="form-label">Seleccionar Servicio</label>

                                    <div class="col-sm-10">

                                        <select class="form-select" name="id_category" required>

                                            <option value="">Selecciona Servicio</option>

                                            @foreach ($categories as $categori)
                                            <option class="text-yellow-400" value="{{ $categori->id }}"> {{$categori->category_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                            </div>
                           
                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Hora</label>
                                    <input type="time" class="form-control" name="hora" id="hora" placeholder="Selecciona la Hora" aria-label="Boone" required>
                                </div>
                                <!-- End Form -->
                            </div>



                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Selecciona una fecha" required>
                                </div>
                                <!-- End-->
                            </div>
                            <!-- End-->

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Peso</label>
                                    <input type="text" class="form-control" name="peso" id="peso" placeholder="Digita el Peso" required>
                                </div>
                            </div>

                            <!--<div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Método de Pago</label>
                                    <input type="text" class="form-control" name="metodo_pago" id="metodo_pago" placeholder="Digita Metodo de Pago" required>
                                </div>
                            </div>-->

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Total</label>
                                    <input type="text" class="form-control" name="total" id="total" placeholder="Digita el Total a Cobrar" required>
                                </div>
                            </div>



                            <div>
                                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                            </div>

                        </div>
                    </form>

                </div>
                <!-- Body -->
            </div>
            <!-- End Card -->
        </div>
    </div>

</div>

@endsection