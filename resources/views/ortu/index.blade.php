@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-info">
			<div class="panel-heading">Data Orang Tua
				<div class="panel-title pull-right"> <a href="{{ route('ortu.create') }}">Add</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table">
						<th>No</th>
						<th>Nama Ortu</th>
						<th>Jenis Kelamin</th>
						<th>Usia</th>
						<th>Nama Siswa</th>
						<th colspan="3"><center>Action</center></th>
						<tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($ortu as $data)
							<tr>
								<td>{{ $no++ }}</td>
								<td>{{ $data->Nama }}</td>
								<td>{{ $data->Jenis_Kelamin }}</td>
								<td>{{ $data->Usia }}</td>
								<td>{{ $data->siswa->Nama }}</p></td>
								<td>
									<a class="btn btn-primary" href="{{ route('ortu.edit', $data->id) }}">Edit</a>
								</td>
								<td>
							<a href="{{ route('ortu.show',$data->id) }}" class="btn btn-info">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('ortu.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure to delete?')">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection