
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Customer Edit</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color:#f0f8ff">
<div class="card-header text-center">
<a>Untuk Menambah Macam-Macam Produk, </a>
<a href="/mcustomer/tambah" class="btn btn-link">Klik Disini</a>
</div>
<div class="card-header text-center">
<a>Untuk Melihat CRUD yang Lainnya, </a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>


<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">CRUD Customer</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Telp</th>
                        <th scope="col">Email</th>
						<th scope="col">Edit</th>
            <th scope="col">Delete</th>
                      </tr>
                    </thead>
					<tbody>
@foreach($mcustomer as $datas)
<tr>
<td>{{ $datas->customer_id}}</td>
<td>{{ $datas->name}}</td>
<td>{{ $datas->address }}</td>
<td>{{ $datas->telp }}</td>
<td>{{ $datas->email }}</td>
<td><a href="/mcustomer/edit/{{ $datas->customer_id }}">Edit</a></td>
<td><a href="/mcustomer/hapus/{{ $datas->customer_id }}">Hapus</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
Halaman : {{ $mcustomer->currentPage() }} <br/>
Jumlah Data : {{ $mcustomer->total() }} <br/>
Data Per Halaman : {{ $mcustomer->perPage() }} <br/>
 
 
{{ $mcustomer->links() }}
</body>
</html>