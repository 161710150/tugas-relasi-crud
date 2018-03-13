@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Show Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{ $siswa->Nama }}"  readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('Sekolah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sekolah</label>	
			  			<input type="text" name="Sekolah" class="form-control" value="{{ $siswa->Sekolah }}" readonly>
			  		</div>

			  		<div class="form-group {{ $errors->has('Jenis_Kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="Jenis_Kelamin" class="form-control" value="{{ $siswa->Jenis_Kelamin }}" readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection