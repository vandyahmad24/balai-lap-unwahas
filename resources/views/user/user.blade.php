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
					 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
			
				<div class="page-inner mt--5">
					<div class="row mt--2">
                        @foreach($perusahaan as $item)
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title d-flex">Nama Perusahaan : {{$item->nama}}
									</div>
									<div class="card-category">Deskripsi : <br>{{$item->deskripsi}}
									</div>
									<hr>
									<div class="card-category">No Hp Perusahaan : <br>{{$item->no_hp}}
									</div>
									<div class="card-category">Status Perusahaan : <br>@if($item->status =='tutup')
										<p class="text-danger">
											{{$item->status}}
										</p>
									@else
									<p class="text-success">
											{{$item->status}}
									</p>
									@endif
									</div>
									<hr>	
									@if($item->status =='buka')
									<a href="/user/loker/detail/{{$item->id}}" class="btn btn-primary">
										Detail Loker
									</a>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			

		@endsection