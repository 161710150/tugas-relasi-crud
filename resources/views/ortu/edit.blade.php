@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
			  <div class="panel-heading">Edit Data Orang Tua
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('ortu.update',$ortu->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('Nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Ortu</label>	
			  			<input type="text" name="Nama" class="form-control" value="{{ $ortu->Nama }}"  required>
			  			@if ($errors->has('Nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('Jenis_Kelamin') ? ' has-error' : '' }}">
			  		
			  		<label class="control-label">Jenis Kelamin</label>	<br>
			  		
			  		<select name="Jenis_Kelamin" class="form-control" required>
			  			<option>{{ $ortu->Jenis_Kelamin }}</option>
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

			  		<div class="form-group {{ $errors->has('Usia') ? ' has-error' : '' }}">
			  			<label class="control-label">Usia</label>	
			  			<input type="text" name="Usia" class="form-control" value="{{ $ortu->Usia }}" required>
			  			@if ($errors->has('Usia'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Usia') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group{{$errors->has('id_siswas') ? 'has-error' : ''}}">
						<label class="control-label">Nama Siswa</label>
						<select class="form-control" name="id_siswas">
							
							@foreach($siswa as $data)
							<option value="{{ $data->id }}"{{ $select==$data->id ? 'selected="selected"' : ''}}>{{ $data->Nama }}</option>
							@endforeach
						</select>
						@if ($errors->has('id_siswas'))
						<span class="help-block">
							<strong>{{ $errors->first('id_siswas') }}</strong>
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