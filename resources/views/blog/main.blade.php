@extends('layouts.app')

@section('content')
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">ErSulba's Blog</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('about')}}">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="post.html">Sample Post</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Page Header -->
	<header class="masthead" style="background-image: url('http://lorempixel.com/1920/1080/technics')">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="site-heading">
						<h1>ErSulba's Web</h1>
						<span class="subheading">A Blog Created by ErSulba</span>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Main Content -->
	@foreach( $posts as $post)
	<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<div class="post-preview">
						<a href="/posts/{{ $post->slug }}">
							<h2 class="post-title">
								{{ $post->title }}
							</h2>
							<h3 class="post-subtitle">
								Problems look mighty small from 150 miles up
							</h3>
						</a>
						<p class="post-meta">Posted by
							<a href="#"> asdasdasdasd</a>
							on September 24, 2017</p>
					</div>
					<hr>
				</div>
			</div>
	</div>
	@endforeach
	<hr>
	<!-- Pager -->
	<div class="clearfix">
		<a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
	</div>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 mx-auto">
					<ul class="list-inline text-center">
						<li class="list-inline-item">
							<a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
							</a>
						</li>
					</ul>
					<p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
				</div>
			</div>
		</div>
	</footer>
	@endsection