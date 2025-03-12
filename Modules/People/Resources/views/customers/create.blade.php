@extends('layouts.app')

@section('title', 'Create Customer')

@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customers</a></li>
    <li class="breadcrumb-item active">Add</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                @include('utils.alerts')
                <div class="form-group">
                    <button class="btn btn-primary">Create Customer <i class="bi bi-check"></i></button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 style="font-weight: bolder;font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">BUSINESS INFORMATION</h4>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="customer_name">Business Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="customer_phone">Telephone Contacts <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="customer_phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="customer_email">Email Address<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="customer_email" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="city">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="country">Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="country" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="address">Postal Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="address" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="customer_website">Website Address</label>
                                    <input type="text" class="form-control" name="customer_website" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_pin">PIN <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_pin" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_vat">VAT <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_vat" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_permit_no">Business Permit No:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_permit_no" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_years">No. of Years in Business:</label>
                                    <input type="number" class="form-control" name="business_years" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_date_registration">Date or Registration. <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="business_date_registration" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_reg_cert_no">Registration Certificate Number: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_reg_cert_no" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="business_permit_no">Business Permit No:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="business_permit_no" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 style="font-weight: bolder;font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">TYPE OF BUSINESS</h4>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="business_type" id="corporate" value="corporate">
                                    <label for="corporate"><b>Corporate</b>&nbsp;<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="business_type" id="individual" value="individual">
                                    <label for="individual"><b>Individual</b>&nbsp;<span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="business_type" id="e_commerce" value="e_commerce">
                                    <label for="e_commerce"><b>E-Commerce</b>&nbsp;<span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 style="font-weight: bolder;font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;">BILLING ADDRESS</h4>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="postal_address">Postal Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="postal_address" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="postal_zip">Postal Zip <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="postal_zip" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="postal_town">Postal Town<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="postal_town" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="postal_city">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="postal_city" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="telephone_1">Telephone 1 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="telephone_1" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="telephone_2">Telephone 2 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="telephone_2" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="billing_email">Bill Email</label>
                                    <input type="text" class="form-control" name="billing_email" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="payment_term">Payment Terms <span class="text-danger">*</span></label>
                                    <select class="form-control" name="payment_term" required>
                                        <option value="v-list-item__title" disabled selected>Select Payment Terms</option>
                                        <option value="PIA :    Payment in advance">PIA : Payment in advance</option>
                                        <option value="Net 7 :  Payment expected within 7 days after the invoice date">Net 7 : Payment expected within 7 days after the invoice date </option>
                                        <option value="Net 10 : Payment expected within 15 days after the invoice date">Net 10 : Payment expected within 15 days after the invoice date </option>
                                        <option value="Net 15 : Payment expected within 15 days after the invoice date">Net 15 : Payment expected within 15 days after the invoice date </option>
                                        <option value="Net 60 : Payment expected within 60 days after the invoice date">Net 60 : Payment expected within 60 days after the invoice date </option>
                                        <option value="Net 90 : Payment expected within 90 days after the invoice date">Net 90 : Payment expected within 90 days after the invoice date </option>
                                        <option value="COD : Cash on delivery">COD : Cash on delivery</option>
                                        <option value="EOM : End of month">EOM : End of month</option>
                                        <option value="21 MFI : 21st of the month following invoice date">21 MFI : 21st of the month following invoice date</option>
                                        <option value="COD : Cash on delivery">COD : Cash on delivery</option>
                                        <option value="CND : Cash next delivery   ">CND : Cash next delivery </option>
                                        <option value="CIA : Cash in advance ">CIA : Cash in advance </option>
                                        <option value="CBS : Cash before delivery ">CBS : Cash before delivery </option>
                                        <option value="CWO : Cash with order ">CWO : Cash with order </option>
                                        <option value="1MD Monthly credit payment of a full month (or two-month) supply">1MD Monthly credit payment of a full month (or two-month) supply</option>
                                        <option value="2MD : Monthly credit payment of a full month (or two-month) supply">2MD : Monthly credit payment of a full month (or two-month) supply</option>
                                        <option value="Stage payments : Set payments On DD/ MM/ YY">Stage payments : Set payments On DD/ MM/ YY</option>
                                        <option value="invoice Forward dating : Customer Delivery DD MM YY   ">invoice Forward dating : Customer Delivery DD MM YY</option>
                                        <option value="Accumulation discounts">Accumulation discounts</option>
                                        <option value="Partial payment discount">Partial payment discount</option>
                                        <option value="Rebate">Rebate</option>
                                        <option value="Contra : Payment from the client, offset by the cost of supplies purchased">Contra : Payment from the client, offset by the cost of supplies purchased</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="credit_term">Credit Terms <span class="text-danger">*</span></label>
                                    <select class="form-control" name="credit_term" required>
                                        <option selected disabled>Select Credit Terms</option>
                                        <option value="Cash on Delivery (CoD): Here the payment is due at the same time as a product or service is delivered. This also known as(‘Payable on Receipt)">Cash on Delivery (CoD): Here the payment is due at the same time as a product or service is delivered. This also known as ‘Payable on Receipt’</option>
                                        <option value="Payment in Advance: Seller demands the buyer to pay the consideration, either  partial or full before the delivery of goods.">Payment in Advance: Seller demands the buyer to pay the consideration, either partial or full before the delivery of goods.</option>
                                        <option value="Pre-paid: This is exactly opposite of cash o delivery(COD). Here, the buyer is required to pay the full consideration for the seller before the delivery of goods.">Pre-paid: This is exactly opposite of cash on delivery(COD). Here, the buyer is required to pay the full consideration for the seller before the delivery of goods.</option>
                                        <option value="Stage Payment: Payment of agreed amount upon completion of decided milestone.">Stage Payment: Payment of agreed amount upon completion of decided milestone.</option>
                                        <option value="Bill of Exchange: Arrangement to pay at a later date, usually with bank support.">Bill of Exchange: Arrangement to pay at a later date, usually with bank support.</option>
                                        <option value="N/10, N/15, etc: This is applicable in case of credit sales and it notifies the maximum credit period allowed for payment. Here, N/10 denotes the net credit period of 10 days">N/10, N/15, etc: This is applicable in case of credit sales and it notifies the maximum credit period allowed for payment. Here, N/10 denotes the net credit period of 10 days.</option>
                                        <option value="2/10, n/30: The credit term of [ 2/10, n/30] means that you will get a discount of 2% if you clear your account within 10 days with a maximum credit period of 30 days">2/10, n/30: The credit term of [ 2/10, n/30] means that you will get a discount of 2% if you clear your account within 10 days with a maximum credit period of 30 days.</option>
                                        <option value="2/10,n/30 E.O.M: Here E.O.M stands for ‘End of Month. This credit term of [ 2/10,n/30 O.M ] implies that you will get a discount of 2% if you pay your account within the first 10 days of next month with a maximum credit period of 30 days.">2/10,n/30 E.O.M: Here E.O.M stands for ‘End of Month. This credit term of [ 2/10,n/30 O.M ] implies that you will get a discount of 2% if you pay your account within the first 10 days of next month with a maximum credit period of 30 days.</option>
                                        <option value="2/10 R.O.M: Here R.O.M stands for Receipt of goods dating method. A credit term of [ 2/10 O.M] means that you will get a discount of 2% if you make the payment within the first 10 days after the goods are received">2/10 R.O.M: Here R.O.M stands for Receipt of goods dating method. A credit term of [ 2/10 O.M] means that you will get a discount of 2% if you make the payment within the first 10 days after the goods are received.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="delivery_mode">Delivery Modes:<span class="text-danger">*</span></label>
                                    <select id="" class="form-control" name="delivery_mode" required>
                                        <option class="" disabled selected>Select Delivery Modes</option>
                                        <option class="COURIER NEXT DAY">COURIER NEXT DAY</option>
                                        <option class="COURIER SAME DAY">COURIER SAME DAY</option>
                                        <option class="COURIER 48 HOUR">COURIER 48 HOURS</option>
                                        <option class="TRUCK FREIGHT - SELF COLLECTION">TRUCK FREIGHT - SELF COLLECTION</option>
                                        <option class="TRUCK FREIGHT - DELIVERY">TRUCK FREIGHT - DELIVERY</option>
                                        <option class="SELF COLLECTION">SELF COLLECTION</option>
                                        <option class="SALES REP DELIVERY">SALES REP DELIVERY</option>
                                    </select>
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