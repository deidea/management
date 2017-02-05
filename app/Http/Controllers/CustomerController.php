<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
	private $resultsPerPage;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');

		$this->resultsPerPage = 30;
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$customers = Customer::with('projects')
			->with('contacts')
			->paginate($this->resultsPerPage);

		return view('customers.index')->with([
			'customers' => $customers,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CustomerRequest $request
     * @param  Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request, Customer $customer)
    {
		$customer->create($request->all());
		return redirect('customers');
    }

    /**
     * Display the specified resource.
     *
     * @param  Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
		return view('customers.show')->with([
			'customer' => $customer,
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
		return view('customers.edit')->with([
			'customer' => $customer,
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CustomerRequest $request
     * @param  Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
		$customer->update($request->all());
		return redirect('customers');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
