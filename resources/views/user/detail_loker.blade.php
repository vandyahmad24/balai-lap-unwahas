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
												<th scope="col">Nama Perusahaan</th>
												<th scope="col">Loker</th>
												<th scope="col">Job Deskripsi</th>
												<th scope="col">Deadline</th>
												<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($loker as $item)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$item->perusahaan->nama}}</td>
												<td>{{$item->judul}}</td>
												<td>{{$item->job_dec}}</td>
												<td>{{$item->end_time}}</td>
												<td>
													<div class="d-flex">
													<a href="/user/loker/detail-loker/{{$item->id}}" class="btn btn-secondary"> Daftar Loker</a>
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
			

		@endsection