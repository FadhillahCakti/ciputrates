<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Cluster;
use App\Customer;
use App\Type;
use App\Salesdetail;
use App\Sales;
 
class Utama extends Controller
{
   
    /*  Transaksi Header & Detail */

    public function info()
    {
        $info = Info::paginate(10);
    	return view('info.info', ['info' => $info]);
	}
   

/*----------------------------------------------------*/


    /*  Laporan Sales */

    public function sales()
    {
        $info = Info::paginate(10);
    	return view('info.info', ['info' => $info]);
	}
   

}