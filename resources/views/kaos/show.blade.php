@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kaos
			  	<div class="panel-title pull-right"><a href="{{ route('kaos.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Model</label>	
			  			<input type="text" name="model" class="form-control" value="{{ $kaos->model }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Bahan</label>	
			  			<input type="text" name="Bahan" class="form-control" value="{{ $kaos->bahan }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Warna</label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $kaos->warna }}"  
			  			readonly>
			  		</div>

			  					  		<div class="form-group">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $kaos->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection