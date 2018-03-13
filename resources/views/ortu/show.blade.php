@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Show Data Orang Tua
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Orang Tua</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{ $ortu->Nama }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('Jenis_Kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="Jenis_Kelamin" class="form-control" value="{{ $ortu->Jenis_Kelamin }}" readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Usia</label>	
			  			<input type="text" name="Usia" class="form-control" value="{{ $ortu->Usia }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="siswa" class="form-control" value="{{ $ortu->siswa->Nama }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection