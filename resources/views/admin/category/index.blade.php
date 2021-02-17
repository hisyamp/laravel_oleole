@extends('template_backend.home')
@section('subjudul','Kategori')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
	{{Session('success')}}
</div>
@endif

 <a href="{{ route('category.create') }}" class="btn btn-info">Tambah Kategori</a>
 <br><br>
 <table class="table table-striped table-hover table-sm table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Action</th>
 		</tr>
 	</thead>
 	<tbody>
@foreach($category as $result => $hasil)
 		<tr>
 			<td>{{ $result + $category->firstitem() }}</td>
 			<td>{{$hasil->nama}}</td>
 			<td>
 				
 				<form action="{{route('category.destroy',$hasil->id)}}" method="post">
 				@csrf
 				@method('delete')
 				<a href="{{ route('category.edit',$hasil->id) }}" class="btn btn-primary btn-sm">Edit</a>
 				<button class="btn btn-danger btn-sm" type="submit">Delete</button>
 				</form>
 			</td>
 		</tr>
@endforeach
 	</tbody>
 </table>
@endsection