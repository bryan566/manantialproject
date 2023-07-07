@extends('admin.layouts.sistema')

@section('admin')
<!-- Page Header -->
<div class="bg-dark">
    <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->

        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title text-white">Editar Producto</h1>
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

                    <form method="post" action="{{ route('updateproduct', $productinfo->id ) }}">
                        @csrf
                     

                        <div class="row">

                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="firstNameLabel" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $productinfo->product_name }}">
                                </div>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" name="precio" id="precio" value="{{ $productinfo->precio }}">
                                </div>
                                <!-- End Form-->
                            </div>
                            <!-- End Col-->
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Product Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity" value="{{ $productinfo->quantity }}">
                                </div>
                            </div>


                            <!--<div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Product Long Descripcion</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Digita número de celular" aria-label="clarice@site.com">
                                </div>
                            </div>

                           <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Estado de Pago</label>
                                    <input type="email" class="form-control" name="email" id="emailLabel" placeholder="" aria-label="clarice@site.com">
                                </div>
                            </div>-->

                            <div>
                            <input type="hidden" name="hidden_id" value="{{ $productinfo->id }}">
                                <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
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