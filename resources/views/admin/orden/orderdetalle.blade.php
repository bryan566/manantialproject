@extends('admin.layouts.sistema')

@section('admin')

<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('ordenIndex') }}">Orders</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order details</li>
                    </ol>
                </nav>

                <div class="d-sm-flex align-items-sm-center">
                    <h1 class="page-header-title">{{$verpedido->cliente}}</h1>

                    <span class="ms-2 ms-sm-3">
                        <i class="bi-calendar-week"></i> Aug 17, 2020, 5:48 (ET)
                    </span>
                </div>

                <div class="mt-2">
                    <div class="d-flex gap-2">
                        <a class="text-body me-3" href="javascript:;" onclick="window.print(); return false;">
                            <i class="bi-printer me-1"></i> Print order
                        </a>

                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a class="text-body" href="javascript:;" id="moreOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                More options <i class="bi-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu mt-1" aria-labelledby="moreOptionsDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="bi-clipboard dropdown-item-icon"></i> Duplicate
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-x dropdown-item-icon"></i> Cancel order
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-archive dropdown-item-icon"></i> Archive
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-eye dropdown-item-icon"></i> View order status page
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-pencil dropdown-item-icon"></i> Edit order
                                </a>
                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>
                </div>
            </div>
            <!-- End Col -->

            <div class="col-sm-auto">
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Previous order">
                        <i class="bi-arrow-left"></i>
                    </button>
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Next order">
                        <i class="bi-arrow-right"></i>
                    </button>
                </div>
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="row">
        <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                    <h4 class="card-header-title">Pedido <span class="badge bg-soft-dark text-dark rounded-circle ms-1">{{ $verpedido->pedido_code }}</span></h4>
                    <a class="link" href="javascript:;">Edit</a>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <!-- Media -->
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="avatar avatar-xl">
                                <img class="img-fluid" src="{{ asset('assets/img/400x400/img26.jpg') }}" alt="Image Description">
                            </div>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <a class="h5 d-block" href="">NOMBRE DEL SERVICIO</a>

                                    <div class="fs-6 text-body">
                                        <span>Peso:</span>
                                        <span class="fw-semibold">{{ $verpedido->peso }}</span>
                                    </div>
                                    <div class="fs-6 text-body">
                                        <span>Total:</span>
                                        <span class="fw-semibold">{{ $verpedido->total }}</span>
                                    </div>
                                    <div class="fs-6 text-body">
                                        <span>Size:</span>
                                        <span class="fw-semibold">UK 7</span>
                                    </div>
                                </div>
                                <!-- End Col -->


                                <!-- End Col -->

                                <!--<div class="col col-md-2 align-self-center">
                                    <h5>2</h5>
                                </div>-->
                                <!-- End Col -->

                                <div class="col col-md-2 align-self-center text-end">
                                    <h5>{{ $verpedido->total }}</h5>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </div>
                    </div>
                    <!-- End Media -->

                    <!-- Media -->

                    <!-- End Media -->

                    <!-- Media -->

                    <!-- End Media -->

                    <hr>

                    <div class="row justify-content-md-end mb-3">
                        <div class="col-md-8 col-lg-7">
                            <dl class="row text-sm-end">
                                <dt class="col-sm-6">Subtotal:</dt>
                                <dd class="col-sm-6">{{ $verpedido->total }}</dd>
                                <dt class="col-sm-6">Total:</dt>
                                <dd class="col-sm-6">{{ $verpedido->total }}</dd>
                                <!--<dt class="col-sm-6">Cantidad Pagada:</dt>
                                <dd class="col-sm-6">$65.00</dd>-->
                            </dl>
                            <!-- End Row -->
                        </div>
                        <!-- End Col -->
                    </div>

                    <hr>


                    <!-- End Row -->

                    <div class="dropdown">

                        <a class="btn btn-primary" href="">
                            <i class="bi-person-plus-fill me-1"></i> Imprimir Pedido
                        </a>

                        <a class="btn btn-primary" href="">
                            <i class="bi-person-plus-fill me-1"></i> Descargar PDF
                        </a>

                    </div>





                </div>
                <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->

            <!-- End Card -->
        </div>

        <!-- End Card -->

        <div class="col-lg-4">
        <!-- Card -->
        <div class="card d-print-none">
  
            <!-- Header -->
            <div class="card-header card-header-content-between">
            <h4 class="card-header-title">Etiqueta QR</h4>
                
                <!-- End Unfold -->
                <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm card-dropdown-btn rounded-circle" id="projectsGridDropdown8" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-three-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectsGridDropdown8">
                                <a onclick="window.print(); return false;" class="dropdown-item" href="#">Imprimir</a>
                                <a class="dropdown-item" href="#">Descargar</a>


                            </div>
                        </div>
                        <!-- End Dropdown -->
                    </div>

            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">

                <div class="row align-items-center text-start mb-4">
                    <div class="col">
                       
                    </div>
                    <!-- End Col -->

                </div>

                <div class="d-flex justify-content-center mb-2">

                    {!! DNS2D::getBarcodeHTML("$verpedido->cliente, $verpedido->pedido_code",'QRCODE') !!}

                </div>

            </div>
            <!-- End Body -->

            <hr class="my-0">

            <!-- Body -->

            <!-- End Body -->

            <hr class="my-0">



        </div>
        <!-- End Card -->
    </div>





    </div>


    <!---->


</div>
<!-- End Row -->
</div>
<!-- End Content -->

<!-- Footer -->

@endsection