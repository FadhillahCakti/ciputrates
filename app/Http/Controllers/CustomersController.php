<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cluster;
use App\Customer;
use App\Type;
use App\Salesdetail;
use App\Sales;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    public function mcustomeredit()
    {
    	$mcustomer = Customer::paginate(10);
    	return view('mcustomer.mcustomeredit', ['mcustomer' => $mcustomer]);
    }

    public function mcustomer_tambah()
    {
    	return view('mcustomer.mcustomer_tambah');
    }

    public function mcustomer_store(Request $request)
    {
    	$this->validate($request,[
			'name' => 'required',
			'address' => 'required',
			'telp' => 'required',
			'email' => 'required'
    	]);
 
        Customer::create([
    		'name' => $request->name,
			'address' => $request->address,
			'telp' => $request->telp,
			'email' => $request->email
    	]);
 
    	return redirect('/mcustomeredit');
	}

    public function mcustomer_edit($customer_id)
	{
   		$mcustomer = Customer::find($customer_id);
   		return view('mcustomer.mcustomer_edit', ['mcustomer' => $mcustomer]);
	}

	public function mcustomer_update($customer_id, Request $request)
	{
    	$this->validate($request,[
			'name' => 'required',
			'address' => 'required',
    		'telp' => 'required',
            'email' => 'required'
    ]);
 
    	$mcustomer = Customer::find($customer_id);
		$mcustomer->name = $request->name;
		$mcustomer->address = $request->address;
    	$mcustomer->telp = $request->telp;
		$mcustomer->email = $request->email;
    	$mcustomer->save();
    	return redirect('/mcustomeredit');
	}

	public function mcustomer_hapus($customer_id)
	{
		$mcustomer = Customer::find($customer_id);
		$mcustomer->delete();
		return redirect('/mcustomeredit');
	}
}