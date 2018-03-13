@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">Data Orang Tua
				<div class="panel-title pull-right"> <a href="{{ route('ortu.index') }}">Back
				</a>
				</div>
			</div>
			<div class="panel-body">
				<form action="{{ route('ortu.store')}} " method="post">
					
					{{ csrf_field()}}
					
					<div class="form-group {{$errors->has('Nama') ? 'has-error' : ''}}">
						
						<label class="control-label">Nama Orang Tua</label>
						
						<input type="text" class="form-control" name="Nama" required>
						
						@if ($errors->has('Nama'))
						<span class="help-block">
							<strong> {{ $errors->first('Nama') }} </strong>
						</span>
						@endif
					
					</div>

					<div class="form-group {{ $errors->has('Jenis_Kelamin') ? 'has-error' : ''}}">
					
						<label class="control-label">Jenis Kelamin</label><br>
					
						<input type="radio" class="radio-control" name="Jenis_Kelamin" value="Laki-laki">Laki-laki
			  			<input type="radio" class="radio-control" name="Jenis_Kelamin" value="Perempuan">Perempuan
					
							@if ($errors->has('Jenis_Kelamin'))
							<span class="help-block">
								<strong> {{$errors->first('Jenis_Kelamin') }} </strong>
							</span>
							@endif
					
					</div>

					<div class="form-group {{ $errors->has('Usia') ? 'has-error' : ''}}">
					
						<label class="control-label">Usia </label>
					
						<input type="text" name="Usia" class="form-control"  required>
					
							@if ($errors->has('Usia'))
							<span class="help-block">
								<strong> {{$errors->first('Usia') }} </strong>
							</span>
							@endif
					
					</div>

					<div class="form-group{{$errors->has('id_siswas') ? 'has-error' : ''}}">
						<label class="control-label">Nama Siswa</label>
						<select class="form-control" name="id_siswas">
							<option>---</option>
							@foreach($siswa as $data)
							<option value="{{ $data->id }}">{{ $data->Nama }}</option>
							@endforeach
						</select>
						@if ($errors->has('id_siswas'))
						<span class="help-block">
							<strong>{{ $errors->first('id_siswas') }}</strong>
						</span>
						@endif
						
					</div>
					
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection