@extends('layouts.admin')
@section('title','Halaman admin')
@section('content')
	<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halaman Admin</h2>
								<h5 class="text-white op-7 mb-2">BKK - Universitas Wahid Hasyim</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Edit Perusahaan  : {{$perusahaan->nama}}</div>
								 <form action="{{route('company-put')}}" method="POST" enctype="multipart/form-data">
        						{{ csrf_field() }}     
								<div class="form-group">
									<label for="nama">Nama Perusahaan</label>
									<input type="hidden" name="perusahaan_id" value="{{$perusahaan->id}}">
									<input type="text" name="nama" class="form-control" id="nama" value="{{$perusahaan->nama}}">
								</div>
								<div class="form-group">
									<label for="alamat">Alamat Perusahaan</label>
									<input type="text" class="form-control" id="alamat" name="alamat" value="{{$perusahaan->alamat}}">
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi Perusahaan</label>
									<textarea class="form-control" id="comment" name="deskripsi" rows="5">{{$perusahaan->deskripsi}}
									</textarea>
								</div>
								<div class="form-group">
									<label for="no_hp">No Hp Perusahaan</label>
									<input type="number" name="no_hp" class="form-control" id="no_hp" value="{{$perusahaan->no_hp}}">
								</div>
								<div class="form-group">
									<label for="status">Status Perusahaan</label>
									<select class="form-control" name="status" id="status">
										<option value="buka" {{ ( $perusahaan->status == 'buka') ? 'selected' : '' }}>Buka Pendaftaran</option>
										<option value="tutup" {{ ( $perusahaan->status == 'tutup') ? 'selected' : '' }}>Tutup Pendaftaran</option>

									</select>
								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			

		@endsection