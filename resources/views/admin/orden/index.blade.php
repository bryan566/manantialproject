@extends('admin.layouts.sistema')

@section('admin')

<div class="content container-fluid">
    <!-- Page Header -->
    <h1 class="page-header-title">Orders</h1>
  
    <!-- End Page Header -->

    
    <!-- End Row -->

    <!-- Card -->
    <div class="card">
        <!-- Header -->
        <div class="card-header card-header-content-md-between">
            <div class="mb-2 mb-md-0">
                <form>
                    <!-- Search -->
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text">
                            <i class="bi-search"></i>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
                    </div>
                    <!-- End Search -->
                </form>
            </div>

            <div class="d-grid d-sm-flex gap-2">
                <!-- Dropdown -->
                <!-- End Dropdown -->

                <!-- Dropdown -->
                <div class="dropdown">
                    <a href="{{ route('createorden') }}" type="button" class="btn btn-white btn-sm w-100">
                        <i class="bi-table me-1"></i> Agregar <span class="badge bg-soft-dark text-dark rounded-circle ms-1">7</span>
                    </a>

                    
                </div>
                <!-- End Dropdown -->
            </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                   "columnDefs": [{
                      "targets": [0],
                      "orderable": false
                    }],
                   "order": [],
                   "info": {
                     "totalQty": "#datatableWithPaginationInfoTotalQty"
                   },
                   "search": "#datatableSearch",
                   "entries": "#datatableEntries",
                   "pageLength": 2,
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatablePagination"
                 }'>
                <thead class="thead-light">
                    <tr>

                        <th>#</th>
                        <th class="table-column-ps-0">Pedido</th>
                        <th>Cliente</th>
                        <th>Hora</th>
                        <th>Fecha</th>
                        <th>Servicio</th>
                        <th>Peso</th>
                        <!--<th>Método de Pago</th>-->
                        <th>Total</th>
                        <!--<th>QR CODE</th>-->
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @php $i=1; @endphp

                    @foreach ($pedidos as $row )
                    <tr>

                        <td>{{ $i++ }}</td>



                        <td class="table-column-ps-0">
                            {{ $row->pedido_code }}
                        </td>

                        <td>
                            {{ $row->cliente }}
                        </td>

                        <td>
                            {{ $row->hora }}
                        </td>

                        <td>
                            {{ $row->fecha }}
                        </td>

                        <td>
                            {{ $row->category_name }}
                        </td>

                        <td>
                            {{ $row->peso }}
                        </td>

                        <!--<td>

</td>-->

                        <td>
                            {{ $row->total }}
                        </td>

                        <!--<td>
                      {!! DNS2D::getBarcodeHTML("$row->cliente, $row->pedido_code",'QRCODE') !!}
                         </td>-->



                        <td>
                           

                            <a href="" class="btn btn-primary sm" title="Editar"> <i class="fas fa-edit"></i></a>


                            <a href="" class="btn btn-dark sm" title="Eliminar"> <i class="fas fa-trash-alt"></i></a>

                            <a href="{{ route('ordendetalle', $row->id) }}" class="btn btn-success sm" title="QR CODE"> <i class="fas fa-eye"></i></a>
                             <button type="button" onclick="PrintReciboContent('print')" class="btn btn-dark"><i class="fa fa-print"></i>Print</button>

                        </td>

                   
                    </tr>


                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- End Table -->

        <!-- Footer -->
 <!-- FOOTER DE LA TABLA Y LA PAGINACIÓN-->
 <div class="card-footer">
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                        <span class="me-2">Showing:</span>

                        <!-- Select -->
                        <div class="tom-select-custom">
                            <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                                <option value="2" selected>2</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
                            </select>
                        </div>
                        <!-- End Select -->

                        <span class="text-secondary me-2">of</span>

                        <!-- Pagination Quantity -->
                        <span id="datatableWithPaginationInfoTotalQty"></span>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-auto">
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <!-- Pagination -->
                        <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Card -->
</div>
<!-- End Content -->

<!-- Footer -->


<!--MODAL

<div class="modal">
<div id="print">
       

    </div>

</div>-->


<!--<script>
    function PrintReciboContent(el) {
        var data = '< input type="button" id="printPageButton ' + 
        'class="printPageButton" style="display:block; ' +
        'width="100%"; border:none; background-color: #008B8B; color:#fff ' +
        'padding: 14px 28px; font-size: 16px; cursor:pointer; text-align:center' +
        'value="Print Receipt"" onClick="window.print() ">'; 

        data += document.getElementById(el).innerHTML;
        myReceipt = window.open("", "myWin", "left=150, top=130, width=400, height=400" );
        myReceipt.screnX = 0;
        myReceipt.screnY = 0;
        myReceipt.document.write(data);
        myReceipt.document.title = "Print Receipt";
        myReceipt.focus();
        setTimeout(() => {
            myReceipt.close();
        }, 8000);

    }
</script>-->

@endsection