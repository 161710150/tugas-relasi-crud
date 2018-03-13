@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Edit Data Guru
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('guru.update',$guru->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('Nama_Guru') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  			<input type="text" name="Nama_Guru" class="form-control" value="{{ $guru->Nama_Guru }}"  required>
			  			@if ($errors->has('Nama_Guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama_Guru') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('Mata_Pelajaran') ? ' has-error' : '' }}">
			  			<label class="control-label">Mata Pelajaran</label>	
			  			<input type="text" name="Mata_Pelajaran" class="form-control" value="{{ $guru->Mata_Pelajaran }}" required>
			  			@if ($errors->has('Mata_Pelajaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Mata_Pelajaran') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Save</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection