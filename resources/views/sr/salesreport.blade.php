<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body style="background-color:#f0f8ff">
@section('konten')
<h5 class="text-center" style="color:green">Sales Transaction</h5>

<div class="card-header text-center">
<a>Untuk Menambah Info Menarik 48, </a>
<a href="/info/tambah" class="btn btn-link">Klik Disini</a>
</div>
<div class="card-header text-center">
<a>Untuk Melihat CRUD yang Lainnya, </a>
<a href="/home" class="btn btn-link">Klik Disini</a>
</div>

<p>Untuk Cari Kata Kunci Judul :</p>
<form action="/infoedit/cari" method="GET">
<input type="text" name="cari" placeholder="Cari Kata Kunci Judul" value="{{ old('cari') }}">
<input type="submit" value="Cari">
</form>

<div class="container">
	<div class="card mt-5">
	<div class="card-body">
	<h3 class="text-center">Info Menarik 48 (Form Edit)</h3>
	<div class="container">
            <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Isi</th>
			              		<th scope="col">Lanjutan</th>
                      </tr>
                    </thead>
					<tbody>
 @endsection 
</body>
</html>
