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
									<div class="card-title">Edit Lamaran</div>
								 <form action="{{route('put-lamaran')}}" method="POST" enctype="multipart/form-data">
        						{{ csrf_field() }}   
        						<input type="hidden" name="lamaran_id" value="{{$lamaran->id}}">
        						<input type="hidden" name="user_id" value="{{$lamaran->user_id}}"> 
        						<input type="hidden" name="perusahaan_id" value="{{$lamaran->perusahaan_id}}"> 
        						<input type="hidden" name="loker_id" value="{{$lamaran->loker_id}}"> 

        						<div class="form-group">
									<label for="judul">Nama Mahasiswa</label>
									<input type="text" name="nama" class="form-control" id="judul" value="{{$lamaran->user->name}}" readonly>
								</div>
								<div class="form-group">
									<label for="judul">Nim Mahasiswa</label>
									<input type="text" name="nim" class="form-control" id="judul" value="{{$lamaran->nim}}" readonly>
								</div>
								<div class="form-group">
									<label for="judul">No Hp Mahasiswa</label>
									<input type="text" name="no_hp" class="form-control" id="judul" value="{{$lamaran->no_hp}}" readonly>
								</div>
								<div class="form-group">
									<label for="judul">Berkas Mahasiswa</label>
									<input type="text" name="upload" class="form-control" id="judul" value="{{$lamaran->upload}}" readonly>
								</div>
								<div class="form-group">
									<label for="judul">Nama Loker</label>
									<input type="text" name="no_hp" class="form-control" id="judul" value="{{$lamaran->loker->judul}}" readonly>
								</div>
								<div class="form-group">
									<label for="judul">Nama Perusahaan</label>
									<input type="text" name="no_hp" class="form-control" id="judul" value="{{$lamaran->perusahaan->nama}}" readonly>
								</div>
								<div class="form-group">
									<label for="status">Status Lamaran</label>
									<select class="form-control" name="status" id="status">
										<option value="tolak" {{ ( $lamaran->status == 'tolak') ? 'selected' : '' }}> di tolak</option>
										<option value="pending" {{ ( $lamaran->status == 'pending') ? 'selected' : '' }}>Pending</option>
										<option value="terima" {{ ( $lamaran->status == 'terima') ? 'selected' : '' }}> di Terima</option>


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