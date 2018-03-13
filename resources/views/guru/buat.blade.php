@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">Data Guru
				<div class="panel-title pull-right"> <a href="{{ route('guru.index') }}">Back
				</a>
				</div>
			</div>
			<div class="panel-body">
				<form action="{{ route('guru.store')}} " method="post">
					
					{{ csrf_field()}}
					
					<div class="form-group {{$errors->has('Nama_Guru') ? 'has-error' : ''}}">
						
						<label class="control-label">Nama Guru</label>
						
						<input type="text" class="form-control" name="Nama_Guru" required>
						
						@if ($errors->has('Nama_Guru'))
						<span class="help-block">
							<strong> {{ $errors->first('Nama_Guru') }} </strong>
						</span>
						@endif
					
					</div>
					
					<div class="form-group {{ $errors->has('Mata_Pelajaran') ? 'has-error' : ''}}">
					
						<label class="control-label">Mata Pelajaran</label>
					
						<input type="text" name="Mata_Pelajaran" class="form-control"  required>
					
							@if ($errors->has('Mata_Pelajaran'))
							<span class="help-block">
								<strong> {{$errors->first('Mata_Pelajaran') }} </strong>
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