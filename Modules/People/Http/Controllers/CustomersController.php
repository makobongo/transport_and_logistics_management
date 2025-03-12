<?php

namespace Modules\People\Http\Controllers;

use Modules\People\DataTables\CustomersDataTable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\People\Entities\Customer;

class CustomersController extends Controller
{

    public function index(CustomersDataTable $dataTable)
    {
        abort_if(Gate::denies('access_customers'), 403);

        return $dataTable->render('people::customers.index');
    }


    public function create()
    {
        abort_if(Gate::denies('create_customers'), 403);

        return view('people::customers.create');
    }


    public function store(Request $request)
    {
        abort_if(Gate::denies('create_customers'), 403);

        $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_phone' => 'required|max:255',
            'customer_email' => 'required|email|max:255',
            'city'           => 'required|string|max:255',
            'country'        => 'required|string|max:255',
            'address'        => 'required|string|max:500',
            'customer_website'    => 'required|string|max:500',
            'business_pin'        => 'required|string|max:500',
            'business_vat'        => 'required|string|max:500',
            'business_permit_no'  => 'required|string|max:500',
            'business_years'      => 'required|string|max:500',
            'business_date_registration'  => 'required|string|max:500',
            'business_reg_cert_no'        => 'required|string|max:500',
            "business_type"  => "required|string|max:500",
            "postal_address" => "required|string|max:500",
            "postal_zip"     => "required|string|max:500",
            "postal_town"    => "required|string|max:500",
            "postal_city" => "required|string|max:500",
            "telephone_1" => "required|max:500",
            "telephone_2" => "required|max:500",
            "billing_email" => "required|max:500",
            "payment_term"  => "required|string|max:500",
            "credit_term"   => "required|string|max:500",
            "delivery_mode" => "required|string|max:500"

        ]);

        Customer::create([
            'customer_name'  => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
            'city'           => $request->city,
            'country'        => $request->country,
            'address'        => $request->address,
            'customer_website'    => $request->customer_website,
            'business_pin'        => $request->business_pin,
            'business_vat'        => $request->business_vat,
            'business_permit_no'  => $request->business_permit_no,
            'business_years'      => $request->business_years,
            'business_date_registration'  => $request->business_date_registration,
            'business_reg_cert_no'        => $request->business_reg_cert_no,
            "business_type"  => $request->business_type,
            "postal_address" => $request->postal_address,
            "postal_zip"  => $request->postal_zip,
            "postal_town" => $request->postal_town,
            "postal_city" => $request->postal_city,
            "telephone_1" => $request->telephone_1,
            "telephone_2" => $request->telephone_2,
            "billing_email" => $request->billing_email,
            "payment_term"  => $request->payment_term,
            "credit_term"   => $request->credit_term,
            "delivery_mode" => $request->delivery_mode
        ]);

        toast('Customer Created!', 'success');

        return redirect()->route('customers.index');
    }


    public function show(Customer $customer)
    {
        abort_if(Gate::denies('show_customers'), 403);

        return view('people::customers.show', compact('customer'));
    }


    public function edit(Customer $customer)
    {
        abort_if(Gate::denies('edit_customers'), 403);

        return view('people::customers.edit', compact('customer'));
    }


    public function update(Request $request, Customer $customer)
    {
        abort_if(Gate::denies('update_customers'), 403);

        $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_phone' => 'required|max:255',
            'customer_email' => 'required|email|max:255',
            'city'           => 'required|string|max:255',
            'country'        => 'required|string|max:255',
            'address'        => 'required|string|max:500',
            'customer_website'    => 'required|string|max:500',
            'business_pin'        => 'required|string|max:500',
            'business_vat'        => 'required|string|max:500',
            'business_permit_no'    => 'required|string|max:500',
            'business_years'        => 'required|string|max:500',
            'business_date_registration'  => 'required|string|max:500',
            'business_reg_cert_no'        => 'required|string|max:500'
        ]);

        $customer->update([
            'customer_name'  => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
            'city'           => $request->city,
            'country'        => $request->country,
            'address'        => $request->address,
            'customer_website'    => $request->customer_website,
            'business_pin'        => $request->business_pin,
            'business_vat'        => $request->business_vat,
            'business_permit_no'    => $request->business_permit_no,
            'business_years'        => $request->business_years,
            'business_date_registration'  => $request->business_date_registration,
            'business_reg_cert_no'        => $request->business_reg_cert_no
        ]);

        toast('Customer Updated!', 'info');

        return redirect()->route('customers.index');
    }


    public function destroy(Customer $customer)
    {
        abort_if(Gate::denies('delete_customers'), 403);

        $customer->delete();

        toast('Customer Deleted!', 'warning');

        return redirect()->route('customers.index');
    }
}
