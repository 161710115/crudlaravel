@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data kaos cewek
					<div class="panel-title pull-right"><a href="{{ route('kaos.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Model</th>
					<th>Bahan</th>
					<th>Warna</th>
					<th>Harga</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($kaos as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td> {{ $data->model }} </td>
		<td><p> {{ $data->bahan}} </p></td>
		<td><p> {{ $data->warna }} </p></td>
		<td><p> {{ $data->harga }} </p></td>	
	<td>
		<a class="btn btn-primary" href=" {{ route('kaos.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('kaos.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('kaos.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection