@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Edit Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('siswa.update',$siswa->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{ $siswa->Nama }}"  required>
			  			@if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('Sekolah') ? ' has-error' : '' }}">
			  			<label class="control-label">Sekolah</label>	
			  			<input type="text" name="Sekolah" class="form-control" value="{{ $siswa->Sekolah }}" required>
			  			@if ($errors->has('Sekolah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Sekolah') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('Jenis_Kelamin') ? ' has-error' : '' }}">
			  		
			  		<label class="control-label">Jenis Kelamin</label>	<br>
			  		
			  		<select name="Jenis_Kelamin" class="form-control" required>
			  			<option>{{ $siswa->Jenis_Kelamin }}</option>
			  			<option>Pilih Jenis Kelamin</option>
			  			<option>Laki-laki</option>
			  			<option>Perempuan</option>
			  		</select>

			  			@if ($errors->has('Jenis_Kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Jenis_Kelamin') }}</strong>
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