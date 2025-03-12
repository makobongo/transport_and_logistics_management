@extends('layouts.app')

@section('title', 'Edit Customer')

@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customers</a></li>
    <li class="breadcrumb-item active">Edit</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('customers.update', $customer) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="col-lg-12">
                @include('utils.alerts')
                <div class="form-group">
                    <button class="btn btn-primary">Update Customer <i class="bi bi-check"></i></button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="customer_name">Business Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_name" required value="{{ $customer->customer_name }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="customer_phone">Telephone Contacts <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_phone" required value="{{ $customer->customer_phone }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="customer_email">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="customer_email" required value="{{ $customer->customer_email }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" required value="{{ $customer->city }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="country">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="country" required value="{{ $customer->country }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="address">Postal Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" required value="{{ $customer->address }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="customer_website">Website website <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_website" required value="{{ $customer->customer_website }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_pin">PIN <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_pin" required value="{{ $customer->business_pin }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_vat">VAT <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_vat" required value="{{ $customer->business_vat }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_permit_no">Business Permit No: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_permit_no" required value="{{ $customer->business_permit_no }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_years">No. of Years in Business:<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="business_years" required value="{{ $customer->business_years }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_date_registration">Date or Registration. <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="business_date_registration" required value="{{ $customer->business_date_registration }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_reg_cert_no">Registration Certificate Number:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_reg_cert_no" required value="{{ $customer->business_reg_cert_no }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_permit_no">Business Permit No:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_permit_no" required value="{{ $customer->business_permit_no }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection