@extends('template_backend.home')
@section('subjudul','Tambah Kota')
@section('content')

@if(count($errors)>0)
 @foreach($errors->all() as $error)
 <div class="alert alert-danger" role="alert">
 	{{ $error }}
 </div>
 @endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
 
@endif

<form action="{{ route('city.store') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="">Kota</label>
		<input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Simpan Kota</button>
	</div>
</form>
@endsection