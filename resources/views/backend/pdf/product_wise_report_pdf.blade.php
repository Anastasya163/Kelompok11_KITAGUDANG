@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- Start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Product Wise Stock Report</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                            <li class="breadcrumb-item active">Product Wise Stock Report</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h3>
                                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo" height="24" />
                                    </h3>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-6 mt-4">
                                        <address>
                                            <strong>KITAGUDANG</strong><br>
                                            Kelompok 11<br>
                                        </address>
                                    </div>
                                    <div class="col-6 mt-4 text-end">
                                        <address></address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="p-2"></div>
                                </div>
                            </div>
                        </div> <!-- End row -->

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <div class="p-2"></div>
                                    <div class="">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td class="text-center"><strong>Supplier Name</strong></td>
                                                        <td class="text-center"><strong>Unit</strong></td>
                                                        <td class="text-center"><strong>Category</strong></td>
                                                        <td class="text-center"><strong>Product Name</strong></td>
                                                        <td class="text-center"><strong>Stock</strong></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">
                                                            @if (isset($product['supplier']['name']))
                                                                {{ $product['supplier']['name'] }}
                                                            @else
                                                                Supplier not available
                                                            @endif
                                                        </td>
                                                        <td class="text-center">{{ $product['unit']['name'] ?? 'Unit not available' }}</td>
                                                        <td class="text-center">{{ $product['category']['name'] ?? 'Category not available' }}</td>
                                                        <td class="text-center">{{ $product->name ?? 'Product name not available' }}</td>
                                                        <td class="text-center">{{ $product->quantity ?? 'Quantity not available' }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        @php
                                        $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
                                        @endphp
                                        <i>Printing Time : {{ $date->format('F j, Y, g:i a') }}</i>

                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()"
                                                    class="btn btn-success waves-effect waves-light"><i
                                                        class="fa fa-print"></i></a>
                                                <a href="javascript:window.print()"
                                                    class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row -->
                    </div>
                </div>
            </div> <!-- End col -->
        </div> <!-- End row -->

    </div> <!-- End container-fluid -->
</div>

@endsection
