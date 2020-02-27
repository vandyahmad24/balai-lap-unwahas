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
									<div class="card-title">Tambah Loker</div>
								 <form action="{{route('put-loker')}}" method="POST" enctype="multipart/form-data">
        						{{ csrf_field() }}   
        						<input type="hidden" name="id_perusahaan" value="{{$loker->perusahaan_id}}">
        						<input type="hidden" name="id_loker" value="{{$loker->id}}"> <div class="form-group">
									<label for="judul">Nama Loker</label>
									<input type="date" name="judul" class="form-control" id="judul" value="{{$loker->judul}}">
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi Perkerjaan</label>
									<textarea class="form-control" id="comment" name="deskripsi" rows="5"> {{$loker->job_dec}}
									</textarea>
								</div>
								<div class="form-group">
									<label for="end_time">End Time</label>
									<input type="date" name="end_time" class="form-control" id="end_time" value="{{$loker->end_time}}">
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