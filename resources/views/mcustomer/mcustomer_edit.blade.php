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
<h3>mcustomer (Edit)</h3>
<a href="/mcustomeredit"> Kembali</a>
<br/>
<br/>
<form method="post" action="/mcustomer/update/{{ $mcustomer ->customer_id }}">
{{ csrf_field() }}
{{ method_field('PUT') }}

<div class="form-group">
                            <label>customer_id</label>
                            <textarea customer_id="customer_id" class="form-control" placeholder="customer_id">{{$mcustomer->customer_id}}</textarea>

                            @if($errors->has('customer_id'))
                                <div class="text-danger">
                                    {{ $errors->first('customer_id')}}
                                </div>
                            @endif

                        </div>
							<div class="form-group">
                            <label>name</label>
                            <textarea name="name" class="form-control" placeholder="name">{{$mcustomer->name}}</textarea>

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>address</label>
                            <textarea name="address" class="form-control" placeholder="address">{{$mcustomer->address}}</textarea>

                             @if($errors->has('address'))
                                <div class="text-danger">
                                    {{ $errors->first('address')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>telp</label>
                            <textarea name="telp" class="form-control" placeholder="telp">{{$mcustomer->telp}}</textarea>

                            @if($errors->has('telp'))
                                <div class="text-danger">
                                    {{ $errors->first('telp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>email</label>
                            <textarea name="email" class="form-control" placeholder="email">{{$mcustomer->email}}</textarea>

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
