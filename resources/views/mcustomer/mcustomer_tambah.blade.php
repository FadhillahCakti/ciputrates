<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Nanobox</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body style="background-color:#f0f8ff">
<h3>mcustomer (Tambah)</h3>
<a href="/mcustomeredit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/mcustomer/store">
{{ csrf_field() }}

<div class="form-group">
                            <label>customer_id</label>
                            <input type="text" customer_id="customer_id" class="form-control" placeholder="customer_id">

                            @if($errors->has('customer_id'))
                                <div class="text-danger">
                                    {{ $errors->first('customer_id')}}
                                </div>
                            @endif

                        </div>
						<div class="form-group">
                            <label>name</label>
                            <input type="text" name="name" class="form-control" placeholder="name">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>address</label>
                            <input type="text" name="address" class="form-control" placeholder="address">

                             @if($errors->has('address'))
                                <div class="text-danger">
                                    {{ $errors->first('address')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>telp</label>
                            <input type="text" name="telp" class="form-control" placeholder="telp">

                            @if($errors->has('telp'))
                                <div class="text-danger">
                                    {{ $errors->first('telp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">

                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

</body>
</html>
