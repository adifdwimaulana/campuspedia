@extends('templates.t_home')
@section('content')
        <div class="home-slides startup-home">
			<div class="main-banner startup-bg1">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="row h-100 justify-content-center align-items-center">
								<div class="col-lg-6 col-md-12">
									<div class="hero-content">
										<h1><center> Komunitas Online Mahaiswa dan Palajar</center></h1>
										<p><center>Sumber inspirasi pelajar dan mahasiswa. Untuk kemajuan dunia pendidikan Indonesia.</center></p>
										
										
									</div>
								</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gray shape-1"></div>
				<div class="shape1"><img src="{{asset('assets/front/img/shape1.png')}}" alt="img"></div>
				<div class="shape2"><img src="{{asset('assets/front/img/shape2.png')}}" alt="img"></div>
				<div class="shape3"><img src="{{asset('assets/front/img/shape3.png')}}" alt="img"></div>
				<div class="shape6"><img src="{{asset('assets/front/img/shape6.png')}}" alt="img"></div>
				<div class="shape8 rotateme"><img src="{{asset('assets/front/img/shape8.svg')}}" alt="shape"></div>
				<div class="shape9"><img src="{{asset('assets/front/img/shape9.svg')}}" alt="shape"></div>
			</div>

			<div class="main-banner startup-bg2">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="row h-100 justify-content-center align-items-center">
								<div class="col-lg-6 col-md-12">
									<div class="hero-content">
										<h1><center> Komunitas Online Mahaiswa dan Palajar</center></h1>
										<p><center>Sumber inspirasi pelajar dan mahasiswa. Untuk kemajuan dunia pendidikan Indonesia.</center></p>
										
										
									</div>
								</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gray shape-1"></div>
				<div class="shape1"><img src="{{asset('assets/front/img/shape1.png')}}" alt="img"></div>
				<div class="shape2"><img src="{{asset('assets/front/img/shape2.png')}}" alt="img"></div>
				<div class="shape3"><img src="{{asset('assets/front/img/shape3.png')}}" alt="img"></div>
				<div class="shape6"><img src="{{asset('assets/front/img/shape6.png')}}" alt="img"></div>
				<div class="shape8 rotateme"><img src="{{asset('assets/front/img/shape8.svg')}}" alt="shape"></div>
				<div class="shape9"><img src="{{asset('assets/front/img/shape9.svg')}}" alt="shape"></div>
			</div>

			<div class="main-banner startup-bg3">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="row h-100 justify-content-center align-items-center">
								<div class="col-lg-6 col-md-12">
									<div class="hero-content">

										<h1><center> Komunitas Online Mahaiswa dan Palajar</center></h1>
										<p><center>Sumber inspirasi pelajar dan mahasiswa. Untuk kemajuan dunia pendidikan Indonesia.</center></p>
										
										
									</div>
								</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<div class="bg-gray shape-1"></div>
				<div class="shape1"><img src="{{asset('assets/front/img/shape1.png')}}" alt="img"></div>
				<div class="shape2"><img src="{{asset('assets/front/img/shape2.png')}}" alt="img"></div>
				<div class="shape3"><img src="{{asset('assets/front/img/shape3.png')}}" alt="img"></div>
				<div class="shape6"><img src="{{asset('assets/front/img/shape6.png')}}" alt="img"></div>
				<div class="shape8 rotateme"><img src="{{asset('assets/front/img/shape8.svg')}}" alt="shape"></div>
				<div class="shape9"><img src="{{asset('assets/front/img/shape9.svg')}}" alt="shape"></div>
			</div>
		</div>
        <!-- End Startup Main Banner -->
        
		<!-- Start fitur Area -->
		<section class="project-area ptb-100 bg-light">
			<div class="section-title">
				<h2>Kampus</h2>					
			</div>
			
			{{-- Start Search Section --}}
			{!! Form::open(['action' => 'CollegesController@search_college', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
			<div class="row justify-content-center">
				<div class="col-md-2 form-group">
					{{ Form::text('nama_kampus', '', ['class' => 'form-control', 'placeholder' => 'Nama Kampus', 'autocomplete' => 'off']) }}
				</div>
				<div class="col-md-2 form-group">
					{{ Form::select('provinsi', $provinces, null, ['class' => 'form-control', 'placeholder' => 'Provinsi']) }}
				</div>
				<div class="col-md-2 form-group">
					{{ Form::text('jurusan', '', ['class' => 'form-control', 'placeholder' => 'Jurusan']) }}
				</div>
				<div class="col-md-2 form-group">
					{{ Form::select('tipe_kampus', ['Negeri' => 'Negeri', 'Swasta' => 'Swasta', 'Kedinasan' => 'Kedinasan'], null, ['class' => 'form-control', 'placeholder' => 'Negeri / Swasta / Kedinasan']) }}
				</div>
				<div class="col-md-2 form-group center">
					{{ Form::submit('Cari', ['class' => 'btn btn-primary form-group']) }}
				</div>
				{!! Form::close() !!}
                {{-- End Search Section  --}}
			</div>
		</section>
		<!-- End Search Area -->
		<section class="college-card ptb-100">
			<div class="container">
				<div class="row justify-content-center">
					@if(count($colleges) > 0)
						@foreach($colleges as $college)
							<div class="col-md-4">
								<div class="card" style="width: 20rem; height: 20rem; margin-top: 20px;">
									<img src="/storage/public/logo_kampus/{{ $college->logo_kampus }}" class="card-img-top" style="width: 80px; height: 80px;">
									<div class="card-body">
										<h5 class="card-title">{{ $college->nama_kampus }}</h5>
										<p class="card-text">{{ $college->alamat_kampus }}</p>
										<a href="{{ $college->website_kampus }}" class="btn btn-primary">Link Kampus</a>
									</div>
								</div>	
							</div>
						@endforeach
					@endif		
				</div>
			</div>
		</section>		
@endsection