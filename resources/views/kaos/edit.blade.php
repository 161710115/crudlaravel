@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data kaos 
			  	<div class="panel-title pull-right"><a href="{{ route('mobils.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mobils.update',$kaos->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('model') ? ' has-error' : '' }}">
			  			<label class="control-label">Model</label>	
			  			<input type="text" name="model" class="form-control" value="{{ $kaos->model }}"  
			  			required>
			  			@if ($errors->has('model'))
                            <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('bahan') ? ' has-error' : '' }}">
			  			<label class="control-label">bahan</label>	
			  			<input type="text" name="bahan" class="form-control" value="{{ $kaos->bahan }}"  
			  			required>
			  			@if ($errors->has('bahan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bahan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
			  			<label class="control-label">warna</label>	
			  			<input type="text" name="warna" class="form-control" value="{{ $kaos->warna }}"  required>
			  			@if ($errors->has('spesifikasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $kaos->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection