@extends('admin.layouts.sistema')

@section('admin')

<!-- Page Header-->
<div class="bg-dark">
    <div class="content container-fluid" style="height: 27rem;">


        <div class="row align-items-center">
            <div class="col">
                <h1 class="page-header-title text-white">Listar Productos</h1>
            </div>

        </div>


    </div>
</div>

<!-----TABLA CODIGO--->
<div class="content container-fluid" style="margin-top: -20rem;">

    <!-- Card -->
    <div class="card">
        <!-- HEADER DONDE ESTA EL BUSCADOR,BOTONES DE AGREGAR Y EXPORTAR-->
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
                <div class="dropdown">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle w-100" id="usersExportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-download me-2"></i> Export
                    </button>

                    <div class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="usersExportDropdown">
                        <span class="dropdown-header">Options</span>

                        <a id="export-print" class="dropdown-item" href="javascript:;">
                            <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/illustrations/print-icon.svg" alt="Image Description">
                            Print
                        </a>
                        <a id="export-excel" class="dropdown-item" href="javascript:;">
                            <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                            Excel
                        </a>
                        <a id="export-pdf" class="dropdown-item" href="javascript:;">
                            <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/pdf-icon.svg" alt="Image Description">
                            PDF
                        </a>
                    </div>
                </div>
                <!-- End Dropdown -->

                <!-- Dropdown -->
                <div class="dropdown">

                    <a class="btn btn-primary" href="{{ route('addproduct') }}">
                        <i class="bi-person-plus-fill me-1"></i> Nuevo Producto
                    </a>

                </div>
                <!-- End Dropdown -->
            </div>

        </div>
        <!-- End Header -->
        @if (session()->has('message'))

        <div class="alert alert-success">
            {{ session()->get('message') }}

        </div>

        @endif
        <!-- COMIENZO DE LA TABLA -->
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
                        <th class="table-column-pe-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                                <label class="form-check-label" for="datatableCheckAll"></label>
                            </div>
                        </th>

                        <th>#</th>
                        <!--<th class="table-column-ps-0">ID</th>-->
                        <th>Product Name</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>QR CODE</th>
                        <!--<th>Método de Pago</th>-->
                        <!--<th>Total</th>-->
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @php $i=1; @endphp

                   @foreach ($products as $product )
                           <tr>
                        <td class="table-column-pe-0">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="ordersCheck1">
                                <label class="form-check-label" for="ordersCheck1"></label>
                            </div>
                        </td>

                        <td>{{ $i++ }}</td>

                        <!--<td class="table-column-ps-0">


                        </td>-->

                        <!--<td>
                           

                        </td>-->

                        <td>
                            {{ $product->product_name}}
                        </td>

                        <td>
                        {{ $product->precio}}
                        </td>

                        <td>
                        {{ $product->product_code}}
                        </td>

                        <td>
                        {!! DNS2D::getBarcodeHTML("$product->product_name, $product->precio",'QRCODE') !!} 
                        </td>

                        <td>

                            <a href="{{ route('editproduct', $product->id) }}" class="btn btn-primary">Editar</a>
                            <a href="{{ route('deleteproduct', $product->id) }}" class="btn btn-success">Eliminar</a>

                            
                        </td>


                    </tr>

                   @endforeach
                
                   


                </tbody>
            </table>
        </div>
        <!-- End Table -->

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

</div>


<!-- End Card -->









<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function() {
        // INITIALIZATION OF DATATABLES
        // =======================================================
        HSCore.components.HSDatatables.init($('#datatable'), {
            select: {
                style: 'multi',
                selector: 'td:first-child input[type="checkbox"]',
                classMap: {
                    checkAll: '#datatableCheckAll',
                    counter: '#datatableCounter',
                    counterInfo: '#datatableCounterInfo'
                }
            },
            language: {
                zeroRecords: `<div class="text-center p-4">
              <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
              <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
            <p class="mb-0">No data to show</p>
            </div>`
            }
        });

        const datatable = HSCore.components.HSDatatables.getItem('datatable')

        $('.js-datatable-filter').on('change', function() {
            var $this = $(this),
                elVal = $this.val(),
                targetColumnIndex = $this.data('target-column-index');

            datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('mouseup', function(e) {
            var $input = $(this),
                oldValue = $input.val();

            if (oldValue == "") return;

            setTimeout(function() {
                var newValue = $input.val();

                if (newValue == "") {
                    // Gotcha
                    datatable.search('').draw();
                }
            }, 1);
        });

        $('#toggleColumn_order').change(function(e) {
            datatable.columns(1).visible(e.target.checked)
        })

        $('#toggleColumn_date').change(function(e) {
            datatable.columns(2).visible(e.target.checked)
        })

        $('#toggleColumn_customer').change(function(e) {
            datatable.columns(3).visible(e.target.checked)
        })

        $('#toggleColumn_payment_status').change(function(e) {
            datatable.columns(4).visible(e.target.checked)
        })

        $('#toggleColumn_fulfillment_status').change(function(e) {
            datatable.columns(5).visible(e.target.checked)
        })

        $('#toggleColumn_payment_method').change(function(e) {
            datatable.columns(6).visible(e.target.checked)
        })

        datatable.columns(7).visible(false)

        $('#toggleColumn_total').change(function(e) {
            datatable.columns(7).visible(e.target.checked)
        })

        $('#toggleColumn_actions').change(function(e) {
            datatable.columns(8).visible(e.target.checked)
        })
    });
</script>

<!-- JS Plugins Init. -->
<script>
    (function() {
        window.onload = function() {


            // INITIALIZATION OF NAVBAR VERTICAL ASIDE
            // =======================================================
            new HSSideNav('.js-navbar-vertical-aside').init()


            // INITIALIZATION OF FORM SEARCH
            // =======================================================
            new HSFormSearch('.js-form-search')


            // INITIALIZATION OF BOOTSTRAP DROPDOWN
            // =======================================================
            HSBsDropdown.init()


            // INITIALIZATION OF SELECT
            // =======================================================
            HSCore.components.HSTomSelect.init('.js-select')


            // INITIALIZATION OF NAV SCROLLER
            // =======================================================
            new HsNavScroller('.js-nav-scroller')
        }
    })()
</script>

<!-- Style Switcher JS -->

<script>
    (function() {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function() {
            $variants.forEach($item => {
                if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                    $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                    return $item.classList.add('active')
                }

                $item.classList.remove('active')
            })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function($item) {
            $item.addEventListener('click', function() {
                HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
            })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function() {
            setActiveStyle()
        })
    })()
</script>

<script type="text/javascript">
    window.deleteConfirm = function(e) {
        e.preventDefault();
        var form = e.target.form;

        Swal.fire({
            title: 'Deseas Eliminar este producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();

            }
        })

    }
</script>

@endsection