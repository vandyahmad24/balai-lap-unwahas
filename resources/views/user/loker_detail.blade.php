@extends('layouts.admin')
@section('title','Halaman User')
@section('content')
	<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Halaman User</h2>
								<h5 class="text-white op-7 mb-2">BKK - Universitas Wahid Hasyim</h5>
							</div>
						</div>
					</div>
				</div>
			
				<div class="page-inner mt--5">
					<div class="row mt--2">
                        
						<div class="col-md-12">
							<div class="card full-height">
							<div class="card">
								<div class="card-header">
									<div class="card-title">{{$perusahaan->nama}}</div>
									<div class="card-category">{{$perusahaan->deskripsi}}
										<br>
										{{$perusahaan->no_hp}}
										<br>
										{{$perusahaan->alamat}}
										
									</div>
								</div>
								<div class="card-body">
									<div class="form-group">
										<label for="deskripsi">Deskripsi Perkerjaan</label>
										<textarea class="form-control" rows="10" readonly>{{$loker->job_dec}}</textarea>
										<small id="deskripsi" class="form-text text-muted">Berikut deskripsi perkerjaan yang akan anda lakukan.</small>
									</div>
									<div class="form-group">
										<label for="">Terakhir Pendaftaran</label>
										<input type="date" class="form-control" value="{{$loker->end_time}}" readonly>
									</div>
									<hr>
									<h2>Isi Form Pendaftaran Berikut</h2>
									<h3>{{$loker->judul}}</h3>
								 <form action="{{route('add-lamaran')}}" method="POST" enctype="multipart/form-data">
        						{{ csrf_field() }}     
										<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
										<input type="hidden" name="perusahaan_id" value="{{$perusahaan->id}}">
										<input type="hidden" name="loker_id" value="{{$loker->id}}">
									<div class="form-group">
										<label for="">Nama Mahasiswa</label>
										<input type="text" name="nama" class="form-control" value="{{Auth::user()->name}}" readonly >
									</div>
									<div class="form-group">
										<label for="">NIM Mahasiswa</label>
										<input type="text" name="nim" class="form-control" placeholder="Masukan Nim Mahasiswa" >
									</div>
									<div class="form-group">
										<label for="">No Handphone</label>
										<input type="number" name="no_hp" class="form-control" placeholder="08xxxxxxxx" >
									</div>
									<div class="form-group">
										<label for="">Upload</label>
										<input type="file" name="upload" class="form-control" placeholder="08xxxxxxxx" >
									</div>
									<button type="submit" class="btn btn-success">Submit</button>
									</form>
									
								</div>
								
							</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			

		@endsection