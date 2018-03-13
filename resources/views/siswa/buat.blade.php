@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">Data Siswa
				<div class="panel-title pull-right"> <a href="{{ route('siswa.index') }}">Back
				</a>
				</div>
			</div>
			<div class="panel-body">
				<form action="{{ route('siswa.store')}} " method="post">
					
					{{ csrf_field()}}
					
					<div class="form-group {{$errors->has('Nama') ? 'has-error' : ''}}">
						
						<label class="control-label">Nama Siswa</label>
						
						<input type="text" class="form-control" name="Nama" required>
						
						@if ($errors->has('Nama'))
						<span class="help-block">
							<strong> {{ $errors->first('Nama') }} </strong>
						</span>
						@endif
					
					</div>
					
					<div class="form-group {{ $errors->has('Sekolah') ? 'has-error' : ''}}">
					
						<label class="control-label">Sekolah</label>
					
						<input type="text" name="Sekolah" class="form-control"  required>
					
							@if ($errors->has('Sekolah'))
							<span class="help-block">
								<strong> {{$errors->first('Sekolah') }} </strong>
							</span>
							@endif
					
						</div>

					<div class="form-group {{ $errors->has('Jenis_Kelamin') ? 'has-error' : ''}}">
					
						<label class="control-label">Jenis Kelamin</label>
						<select class="form-control" name="Jenis_Kelamin" required>
							<option>Pilih Jenis Kelamin</option>
							<option>Laki-laki</option>
							<option>Perempuan</option>
						</select>
					
							@if ($errors->has('Jenis_Kelamin'))
							<span class="help-block">
								<strong> {{$errors->first('Jenis_Kelamin') }} </strong>
							</span>
							@endif
					
					</div>

					<div class="form-group{{$errors->has('id_guru') ? 'has-error' : ''}}">
						<label class="control-label">Nama Guru</label>
						<select class="form-control" name="id_guru">
							<option>---</option>
							@foreach($guru as $data)
							<option value="{{ $data->id }}">{{ $data->Nama_Guru }}</option>
							@endforeach
						</select>
						@if ($errors->has('id_guru'))
						<span class="help-block">
							<strong>{{ $errors->first('id_guru') }}</strong>
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