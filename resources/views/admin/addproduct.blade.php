@extends('admin.layouts.sistema')

@section('admin')
<!-- Page Header -->
<div class="bg-dark">
    <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->

        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title text-white">Agregar Producto</h1>
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

                    <form method="post" action="{{ route('storeproduct') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="firstNameLabel" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Digita Producto" required>
                                </div>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" name="precio" id="precio" placeholder="Digita el Precio" required>
                                </div>
                                <!-- End Form-->
                            </div>
                            <!-- End Col-->
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Product Quantity</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Digita la cantidad" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Select Category</label>

                                    <div class="col-sm-10">
                                        <select class="form-select" name="product_category_id" id="product_category_id">
                                            <option selected>Selecciona Categoria</option>
                                            @foreach ($categories as $category )
                                                 <option value="{{ $category->id}}" > {{$category->category_name}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>



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