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
									<div class="table-responsive">
								 <table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
								 	 @if (session('status'))
							            <div class="alert alert-success">
							                {{ session('status') }}
							            </div>
							        @endif
							       	@if (session('delete'))
							            <div class="alert alert-danger">
							                {{ session('delete') }}
							            </div>
							        @endif
										<thead>
											<tr>
												<th scope="col">Nomor</th>
												<th scope="col">Nama Mahasiswa</th>
												<th scope="col">Nim Mahasiswa</th>
												<th scope="col">No Hp Mahasiswa</th>
												<th scope="col">Nama Perusahaan</th>
												<th scope="col">Nama Loker</th>
												<th scope="col">Berkas</th>
												<th scope="col">Status</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($lamaran as $item)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$item->user->name}}</td>
												<td>{{$item->nim}}</td>
												<td>{{$item->no_hp}}</td>
												<td>{{$item->perusahaan->nama}}</td>
												<td>{{$item->loker->judul}}</td>
												<td>{{$item->upload}}</td>
												<td>@if($item->status=='pending')
													<span class="text-warning">{{$item->status}}</span>
													@elseif($item->status=='terima')
													<span class="text-success">{{$item->status}}</span>
													@else
													<span class="text-danger">{{$item->status}}</span>
													@endif
												</td>
												<td>
													<div class="d-flex">
													<a href="/admin/edit-lamaran/{{$item->id}}" class="btn btn-warning"> Ubah Status</a>
													
													</div>
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
			</div>
			

		@endsection