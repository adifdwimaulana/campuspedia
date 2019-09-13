@extends('templates.t_home')
@section('content')
	<!-- Start Banner Section -->
	<div class="startup-home">
		<div class="main-banner">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container">
						<div class="row">
							<div class="row h-100 align-items-center">
							<div class="col-lg-6 col-md-6">
								<div class="hero-content">
									<h1>Komunitas Online Mahasiswa dan Pelajar</h1>
									<p>Sumber inspirasi pelajar dan mahasiswa. Untuk kemajuan dunia pendidikan Indonesia.</p>
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
		<section class="filter-area bg-light shadow rounded">
			<div class="container-fluid">
			<div class="section-title">
				<h2>FILTER</h2>					
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
					{{ Form::select('tipe_kampus', ['Negeri' => 'Negeri', 'Swasta' => 'Swasta', 'Kedinasan' => 'Kedinasan'], null, ['class' => 'form-control', 'placeholder' => 'Negeri / Swasta']) }}
				</div>
				<div class="col-md-2 form-group center">
					{{ Form::submit('Cari', ['class' => 'btn btn-primary form-group']) }}
				</div>
				{!! Form::close() !!}
                {{-- End Search Section  --}}
			</div>
		</div>
		</section>
		<!-- End Search Area -->
		
		<!-- Start Card Area -->
		<section class="project-area ptb-100">
			<div class="container">
                <div class="row justify-content-center">
					@if(count($colleges) > 0)
						@foreach ($colleges as $college)
							<div class="col-lg-4 col-md-6">
								<div class="single-project">
									<div class="project-image">
										<img src="{{ asset('storage/public/logo_kampus/'.$college->logo_kampus.'') }}" alt="logo_kampus" style="width: 200px; height: 200px;">
									</div>
		
									<div class="project-content">
										<a href="{{ url('college/'.$college->id.'') }}"><span>{{ $college->nama_kampus }}</span></a>
										<hr>
										<div class="bottom-card">
											<div class="blok-1">
												Tipe : {{ $college->tipe_college->tipe_kampus }}
											</div>
											<div class="blok-2">
												Akreditasi : {{ $college->akreditasi->akreditasi }}
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					@endif
				</div>
				<div class="row justify-content-center">
					{{ $colleges->links('pagination::bootstrap-4') }}
				</div>
			</div>
		</section>
		<!-- End Card Area -->
@endsection