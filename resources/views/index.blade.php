<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- SITE TITLE -->
	<title>Isayev Nadirsah</title>
	<link rel="shortcut icon" href="{{asset('front_style/img/1154.jpg')}}" type="image/x-icon">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="{{asset('portfolio_style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('portfolio_style/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('portfolio_style/css/templatemo-style.css')}}">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- 

Ultra Profile

https://templatemo.com/tm-464-ultra-profile

-->
</head>
<body data-spy="scroll" data-target="#rock-navigation">
	<!-- START NAVIGATION -->
	<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">İsayev Nadirşah</a>
			</div>
			<nav class="collapse navbar-collapse" id="rock-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
					<li><a href="#home" class="smoothScroll">Əsas</a></li>
					<li><a href="#work" class="smoothScroll">İşlərim</a></li>
					<!-- <li><a href="#portfolio" class="smoothScroll">Məlumatlarım</a></li> -->
					<li><a href="#resume" class="smoothScroll">Bacarıqlar</a></li>
					<li><a href="#about" class="smoothScroll">Haqqinda</a></li>
					<li><a href="#contact" class="smoothScroll">Əlaqə</a></li>
                    <li><a href="{{route('admin')}}" class="smoothScroll">Admin</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<!-- END NAVIGATION -->

	<!-- START HOME -->
	<section id="home" class="templatemo-home" style="background-image:url('{{asset('/homeimage/'.$data->image)}}');">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>

				
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>{{$data->name}}</strong></h1>
					<h2 class="tm-home-subtitle">{{$data->position}}</h2>
					<p class="h2 text-danger">{{$data->about}}</p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">Başlayaq</a>
				</div>

				
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- START work -->
	<section id="work" class="tm-padding-top-bottom-100" >
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-11">
					<p class="title"><strong>İşlərim</strong></p>						
				</div>

				@foreach($baza as $items)
				<div class="col-md-4 col-sm-4" >
					<div class="work-wrapper" style="background-image:url('{{asset('/workimage/'.$items->image)}}');">
						<a href="{{$items->site}}"><i class="fa fa-link"></i></a>
						<h3 class="text-uppercase tm-work-h3">{{$items->title}}</h3>
						<hr>
						<p>{{$items->about}}</p>
					</div>
				</div>

				@endforeach
				
			</div>
		</div>
	</section>
	<!-- END work -->

	<!-- START PORTFOLIO -->
	<!-- <section id="portfolio" class="tm-portfolio ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounce">
					<div class="title">
						<h2 class="tm-portfolio-title">My <strong>Portfolio</strong></h2>
					</div>

					START ISO SECTION
					<div class="iso-section">
						
						<div class="iso-box-section">
							
							<div class="iso-box-wrapper col-4-iso-box">
							@foreach($item as $veri)
								<div class="iso-box html photoshop wordpress mobile col-md-6 col-sm-6 col-xs-12 ">
									<div class="portfolio-thumb">
										<img src="url('{{asset('/portfolioimage/'.$veri->image)}}')"  alt="portfolio img">
										<div class="">
											<h3 class="portfolio-item-title">{{$veri->name}}</h3>
											<p>{{$veri->about}}</p>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- END PORTFOLIO -->

	<!-- START RESUME -->
	<section id="resume" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">					
					<h2 class="title"> <strong>Məlumatlarım</strong></h2>
					<p><span class="tm-info-label">Name</span> {{$mlmt->name}}</p>
					<p><span class="tm-info-label">Birthday</span> {{$mlmt->birthday}}</p>
					<p><span class="tm-info-label">Address</span> {{$mlmt->adres}}</p>
					<p><span class="tm-info-label">Phone</span>{{$mlmt->phone}}</p>
					<p><span class="tm-info-label">Email</span>{{$mlmt->email}}</p>
					<p><span class="tm-info-label">Website</span> <a href="#" class="tm-red-text">{{$mlmt->website}}</a></p>
				</div>
				<div class="col-md-6 col-sm-6">
					<h2 class="title"><strong></strong>Bacarıqlar</h2>
					
					@foreach($langs as $lang)
					<h4 class="tm-progress-label">{{$lang->about}} <small class="progress-percent-small">{{$lang->skill}}</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$lang->skill}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$lang->skill}}%;"></div>
					</div>
					@endforeach
					
					<!-- <h4 class="tm-progress-label">HTML5 <small class="progress-percent-small">90%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<h4 class="tm-progress-label">SEO <small class="progress-percent-small">80%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<!-- END RESUME -->

	<!-- START ABOUT -->
	<!-- <section id="about" class="tm-about" style="background-image:url('{{asset('/aboutimage/'.$posi->image)}}');">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
					<div class="title">
						
						<h1 class="tm-red-text">{{$posi->position}}</strong></h1>
					</div>
					<h3>{{$posi->about}}</h3>
					
				</div>
			</div>
		</div>
	</section> -->
	<!-- END ABOUT -->

	<!-- START SOCIAL -->
	<section id="social" class="tm-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
					<div class="media facebook ">
						<a href="https://www.linkedin.com/in/nadirsah-isayev-1ba7b11a9">
							<div class="media-object pull-left " style="margin-right:15px">
							<i class="fa-brands fa-linkedin " style="font-size:50px"></i>
							</div>
							<div class="media-body">
								
								<h3>Linkedin </h3> <h5>unvanim</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
					<div class="media twitter">
						<a href="https://github.com/Nadirsah">
							<div class="media-object pull-left" style="margin-right:15px">
							<i class="fa-brands fa-github-square" style="font-size:50px"></i>
							</div>
							<div class="media-body">
								
								<h3>Github </h3> <h5>unvanim</h5>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.9s">
					<div class="media pinterest">
						<a href="https://mail.google.com">
							<div class="media-object pull-left" style="margin-right:15px">
							<i class="fa-solid fa-at" style="font-size:50px"></i>
							</div>
							<div class="media-body">
								
								<h3>Gmail </h3><h5>unvanim</h5>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SOCIAL -->

	<!-- START CONTACT -->
	<!-- <section id="contact" class="tm-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">					
					<h2 class="title">Drop <strong>me a line</strong></h2>
					<hr>					
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-10 col-sm-10">
					<form action="#" method="post">
						<div class="col-md-6 col-sm-6">
							<input class="form-control" type="text" placeholder="Adınız">
						</div>
						<div class="col-md-6 col-sm-6">
							<input class="form-control" type="email" placeholder="Email adresiniz">
						</div>
						<div class="col-md-12 col-sm-12">
							<input class="form-control" type="text" placeholder="Movzu">
							<textarea class="form-control" placeholder="Mesajınız" rows="6"></textarea>
						</div>
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<input class="form-control" type="submit" value="Gondər">
						</div>
					</form>
				</div>
				 <div class="col-md-1 col-sm-1"></div>
				<div class="col-md-12 col-sm-12">
					<p>Copyright &copy; 2018 Ultra Profile
                    . design: <a rel="nofollow noopener" href="https://templatemo.com">template mo</a></p>
				</div> 
			</div>
		</div>
	</section> -->
	
	<!-- END CONTACT -->
	<script src="{{asset('portfolio_style/js/jquery.js')}}"></script>
    <script src="{{asset('portfolio_style/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('portfolio_style/js/smoothscroll.js')}}"></script>
    <script src="{{asset('portfolio_style/js/jquery.nav.js')}}"></script>
    <script src="{{asset('portfolio_style/js/isotope.js')}}"></script>
    <script src="{{asset('portfolio_style/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('portfolio_style/js/custom.js')}}"></script>

	
</body>
</html>