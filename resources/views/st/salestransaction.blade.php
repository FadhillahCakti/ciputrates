
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Sales Transaction</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color:#f0f8ff">
<h5 class="text-center" style="color:green">Sales Transaction</h5>

<p>Document Number :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>Transaction Date :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>Customer :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>Customer Address :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>No Telephone :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>Email Address :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<p>Notes :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Detail Item</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cluster Name</th>
                        <th scope="col">Type Rumah</th>
			              		<th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                      </tr>
                      <tbody>
                      <tr>
                      <td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
                    </thead>
					            
                    
                    </tbody>
</table>
</div>
</div>
</div>

          <h3 class="text-right">Grand Total : </h3>
</body>
</html>
