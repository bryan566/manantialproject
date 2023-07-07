@extends('admin.layouts.sistema')

@section('admin')

<!-- Page Header -->
<div class="bg-dark">
    <div class="content container-fluid" style="height: 25rem;">
        <!-- Page Header -->

        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title text-white">Editar Category</h1>
            </div>
            <!-- End Col -->
            <div class="col-auto">
                <a class="btn btn-primary">
                    <i class="bi-person-plus-fill me-1"></i> Invite users
                </a>
            </div>
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

                    <form method="post" action="{{ route('updatecategory') }}">
                        @csrf
                        <input type="hidden" value="{{ $category_info->id }}" name="category_id">
                        <div class="row">

                            <div class="col-sm-4">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="firstNameLabel" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category_info->category_name }}" required>
                                </div>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->

                            <!--<div class="col-sm-4">
                                <!-- Form 
                                <div class="mb-4">
                                    <label for="lastNameLabel" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Digita un Correo" aria-label="Boone">
                                </div>
                                <!-- End Form 
                            </div>
                            <!-- End Col
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Digita la ciudad" aria-label="clarice@site.com">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Digita la dirección" aria-label="clarice@site.com">

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label for="emailLabel" class="form-label">Celular</label>
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
                                <button type="submit" class="btn btn-primary mb-3">Actualizar Category</button>
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