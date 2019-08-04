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
			<div class="container">
				<div class="section-title">
					<h2>Kampus</h2>					
                </div>
                {{-- Start Search Section --}}
                <div class="row justify-content-center">
                    {!! Form::open(['action' => ['CollegesController@search_college', $college->id], 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
                    <div class="col-md-2 form-group">
                        {{ Form::label('nama_kampus', 'Nama Kampus') }}
                        {{ Form::text('nama_kampus', '', ['class' => 'form-control', 'placeholder' => 'Nama Kampus']) }}
                    </div>
                    <div class="col-md-2 form-group">
                        {{ Form::label('provinsi', 'Provinsi') }}
                        {{ Form::text('provinsi', '', ['class' => 'form-control', 'placeholder' => 'Provinsi']) }}
                    </div>
                    <div class="col-md-2 form-group">
                        
                    </div>
                    <div class="col-md-2 form-group">
                        
                    </div>
                    <div class="col-md-2 form-group">
                        
                    </div>
                    {!! Form::close() !!}
                </div>
                {{-- End Search Section  --}}
                </div>
			</div>
		</section>
		<!-- End Project Area -->
		
@endsection