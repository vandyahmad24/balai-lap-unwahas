<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('backend/assets/img/favicon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="index.html" class="logo">
					<img src="{{asset('backend/assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{asset('backend/assets/img/logo.png')}}" alt="..." class="avatar-img">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('backend/assets/img/logo.png')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>{{Auth::user()->name}}</h4>
												<p class="text-muted">{{Auth::user()->email}}</p>
											</div>
										</div>
									</li>

									 <a class="dropdown-item" href="{{ route('logout') }}"
	               onclick="event.preventDefault();
	                             document.getElementById('logout-form').submit();">
	                {{ __('Logout') }} 
	            </a>

	            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                @csrf
	            </form>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{asset('backend/assets/img/logo.png')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									{{Auth::user()->name}}
									<span class="user-level">{{Auth::user()->level}}</span>
									
								</span>
							</a>
							<div class="clearfix"></div>

						
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Daftar Menu</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="dashboard">
								<ul class="nav nav-collapse">
									@if(Auth::user()->level=='admin')
									<li>
										<a href="{{route('admin')}}">
											<span class="sub-item">Beranda</span>
										</a>
									</li>
									<li>
										<a href="{{route('company-add')}}">
											<span class="sub-item">Tambah Perusahaan</span>
										</a>
									</li>
									<li>
										<a href="{{route('daftar-loker')}}">
											<span class="sub-item">Daftar Loker </span>
										</a>
									</li>
									<li>
										<a href="{{route('daftar-lamaran')}}">
											<span class="sub-item">Daftar Lamaran </span>
										</a>
									</li>
									@else
									<li>
										<a href="{{route('user')}}">
											<span class="sub-item">Beranda </span>
										</a>
									</li>
									<li>
										<a href="{{route('lamaran')}}">
											<span class="sub-item">Lihat Lamaran </span>
										</a>
									</li>
									@endif
								</ul>
							</div>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		@yield('content')
		
		<!-- End Custom template -->
		<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						2020, Created <i class="fa fa-heart heart text-danger"></i> by <a href="#">Heni Ismiyati</a>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('backend/assets/js/core/jqueryku.js')}}"></script>
	<script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


	<!-- Chart JS -->
	<script src="{{asset('backend/assets/js/plugin/chart.js/chart.min.js')}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('backend/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

	<!-- Chart Circle -->
	<script src="{{asset('backend/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

	<!-- Datatables -->
	<script src="{{asset('backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<!-- Sweet Alert -->
	<script src="{{asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('backend/assets/js/atlantis.min.js')}}"></script>

</body>
</html>