@extends('layouts.app')

@section('title', 'Customer Details')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customers</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{ $customer->customer_name }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Email</th>
                                    <td>{{ $customer->customer_email }}</td>
                                </tr>
                                <tr>
                                    <th>Customer Phone</th>
                                    <td>{{ $customer->customer_phone }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $customer->city }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $customer->country }}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{ $customer->address }}</td>
                                </tr>
                                <tr>
                                    <th>Customer website</th>
                                    <td>{{ $customer->customer_website }}</td>
                                </tr>
                                <tr>
                                    <th>Business Pin</th>
                                    <td>{{ $customer->business_pin }}</td>
                                </tr>
                                <tr>
                                    <th>Business Vat</th>
                                    <td>{{ $customer->business_vat }}</td>
                                </tr>
                                <tr>
                                    <th>Business Permit no:</th>
                                    <td>{{ $customer->business_permit_no }}</td>
                                </tr>
                                <tr>
                                    <th>Business Years</th>
                                    <td>{{ $customer->business_years }}</td>
                                </tr>
                                <tr>
                                    <th>Business Date Registration</th>
                                    <td>{{ $customer->business_date_registration }}</td>
                                </tr>
                                <tr>
                                    <th>Business Registration cert No</th>
                                    <td>{{ $customer->business_reg_cert_no }}</td>
                                </tr>
                                <tr>
                                    <th>Business permit No</th>
                                    <td>{{ $customer->business_permit_no }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

