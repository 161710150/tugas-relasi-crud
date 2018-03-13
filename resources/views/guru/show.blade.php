@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Show Data Guru
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Guru</label>	
			  			<input type="text" name="Nama_Guru" class="form-control" value="{{ $guru->Nama_Guru }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('Mata_Pelajaran') ? ' has-error' : '' }}">
			  			<label class="control-label">Mata Pelajaran</label>	
			  			<input type="text" name="Mata_Pelajaran" class="form-control" value="{{ $guru->Mata_Pelajaran }}" readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection