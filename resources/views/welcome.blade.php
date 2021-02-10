<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicons/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicons/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicons/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicons/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicons/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicons/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicons/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicons/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicons/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/favicons/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicons/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicons/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicons/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title>SMK Pasundan Jatinangor</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">


	<style>
		html,
		body {
			max-width: 100%;
			overflow-x: hidden;
			/* background-color: #444543; */
		}


		#nav-on-image {
			/* background-color: red; */
			position: relative;
			/* width: 100%; */
			z-index: 5000;
		}

		.nav-image {
			/* position: absolute; */
			color: white;
			/* top: 56px; */
			/* z-index: 20; */

		}

		.nav-image ul {
			display: flex;
			flex-direction: row-reverse;
			list-style-type: none;
		}

		.nav-image ul li a {
			color: white;
		}

		/*.nav-image ul li a:hover {
			border-bottom: 1px solid yellow;
		} */

		.position-sticky {
			position: fixed;
			top: 0;
			width: 100%;
			background-color: #1976d2;
			-webkit-animation: text-focus-in 1s both;
			animation: text-focus-in 1s both;
			-webkit-box-shadow: 0px 11px 15px -3px rgba(0, 0, 0, 0.69);
			box-shadow: 0px 11px 15px -3px rgba(0, 0, 0, 0.69);
		}

		.tes {
			position: relative;
			top: -56px;

		}

		@-webkit-keyframes text-focus-in {
			0% {
				-webkit-filter: blur(12px);
				filter: blur(12px);
				opacity: 0;
			}

			100% {
				-webkit-filter: blur(0px);
				filter: blur(0px);
				opacity: 1;
			}
		}

		@keyframes text-focus-in {
			0% {
				-webkit-filter: blur(12px);
				filter: blur(12px);
				opacity: 0;
			}

			100% {
				-webkit-filter: blur(0px);
				filter: blur(0px);
				opacity: 1;
			}


		}

		@-webkit-keyframes text-blur-out {
			0% {
				-webkit-filter: blur(0.01);
				filter: blur(0.01);
			}

			100% {
				-webkit-filter: blur(12px) opacity(0%);
				filter: blur(12px) opacity(0%);
			}
		}

		@keyframes text-blur-out {
			0% {
				-webkit-filter: blur(0.01);
				filter: blur(0.01);
			}

			100% {
				-webkit-filter: blur(12px) opacity(0%);
				filter: blur(12px) opacity(0%);
			}
		}

		.top-container {
			background-image: url("{{ asset('img/22.jpg') }}");
			background-size: cover;
			background-repeat: no-repeat;
			background-color: antiquewhite;
			text-align: center;
			background-position-x: center;
			/* background-position-y: -50px; */

		}

		.top-container h1,
		.top-container h2 {
			/* opacity: 1; */
			color: #D2BE82ed;
		}
	</style>
</head>

<body>

	<div class="top-container">
		<h1>SMK</h1>
		<h2>PASUNDAN JATINANGOR</h2>
		<p>Scroll down to see the sticky effect.</p>
	</div>
	{{-- Navbar --}}
	<nav class="navbar navbar-expand-lg" style="background-color: #37474f;">
		@if (Route::has('login'))
		{{-- <div class="container"> --}}
		{{-- <div class="gbr"> --}}
		{{-- <img src="{{ asset('img/logo.png') }}" alt="smk pasundan jatinangor" width="100px"> --}}
		{{-- <img src="{{ asset('img/logo.svg') }}" alt="smk pasundan jatinangor" width="100px">
		</div> --}}
		{{-- <a class="navbar-brand" href="#">
		</a> --}}
		{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> --}}
		{{-- <a href="#">Home</a> --}}
		{{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
		<a href="#" class="navbar-brand">SMK PASUNDAN JATINANGOR</a>
		<ul class="navbar-nav ml-auto">
			<a href="#" class="nav-link">Indonesia</a>
			<a href="#" class="nav-link">Inggris</a>
			{{-- Authentication Link a href --}}
			@auth
			<a class="nav-link" href="{{ url('/home') }}">Home</a>
			@else
			<a class="nav-link" href="{{ route('login') }}"><i class="fas fa-key"></i> Login</a>

			@if (Route::has('register'))
			<a class="nav-link" href="{{ route('register') }}">Register</a>
			@endif
			@endauth
		</ul>
		{{-- </div> --}}
		@endif
	</nav>

	{{-- <div class="title m-b-md">
                Laravel
            </div> --}}

	{{-- Start Nav --}}

	<div id="nav-on-image">
		<nav class="nav-image">
			<ul>
				<li>
					<a class="nav-link" href="#visi-dan-misi">Visi & Misi</a>
				</li>
				<li>
					<a class="nav-link" href="#tentang-kami">Tentang Kami</a>
				</li>
				<li>
					<a class="nav-link" href="#">Link 4</a>
				</li>
				<li>
					<a class="nav-link" href="#">Link 5</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="tes">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">

				<div class="carousel-item active">
					<img height=50% src="{{ asset('img/1.jpeg')}}" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img height=75% src="{{ asset('img/5.jpg')}}" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img height=75% src="{{ asset('img/3.jpg')}}" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>


	{{-- End Of Nav --}}
	<div class="container">
		<main>
			<hr>
			<div class="row">
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
								content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
								content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card" style="width: 18rem;">
						<img src="..." class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
								content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>

			</div>
			<hr>
			<div id="sejarah" class="row">
				<div class="col">
					<h2>Sejarah</h2>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
				</div>
				<div class="col">
					<h2>Sejarah Berlanjut</h2>
				</div>
			</div>

			<div id="tentang" class="row">
				<div class="col"></div>
				<div class="col">
					<h2>Tentang</h2>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
						saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
						recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
						perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
				</div>
			</div>
			<div id="visi-dan-misi">
				<h2>Visi dan Misi</h2>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
					saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
					recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
					perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
					saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
					recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
					perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus laudantium alias quae totam quaerat
					saepe fugiat aut atque ad blanditiis distinctio eos natus fugit eum, suscipit cum consectetur mollitia
					recusandae enim corrupti! Impedit commodi et sapiente, fugiat magnam voluptatem? Iste omnis, ad nihil
					perferendis iure nemo adipisci sunt earum error ipsum ipsa!</p>
			</div>
		</main>

		<nav>
			<ul>
				<li>Guru</li>
				<li>Fasilitas</li>
				<li>Ekstra Kurikuler</li>
			</ul>
		</nav>
	</div>
	{{-- --}}




	{{-- --}}

	{{-- Footer --}}
	<footer>
		<p>&copy;2021 SMK Pasundan Jatinangor</p>
		<p>Creative & Design by: Deden Moh Jenudin,S.H.</p>
	</footer>
	<div class="with-love">
		<span>
			Made with <i class="fas fa-heart"></i> with{{-- <a
			href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"
			target="_blank">Auxburg</a> --}}
			<a href=""><i class="fab fa-laravel">aravel</i></a>,
			<a href=""><i class="fab fa-vuejs"></i>ue.js</a>,
			<a href=""><i class="fab fa-bootstrap">ootstrap</i></a>
		</span>
	</div>

	{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
	<script>
		window.onscroll = function() {
			myFunction();
		}
		var navOnImage = document.getElementById("nav-on-image");
		var stickyPosisition = navOnImage.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= stickyPosisition) {
				navOnImage.classList.add("position-sticky")
			} else {
				// navOnImage.classList.add("tes-sticky")
				navOnImage.classList.remove("position-sticky")
			}
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
	</script>
</body>

</html>