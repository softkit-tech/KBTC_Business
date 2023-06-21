@extends('layouts.app')

@section('content')

	        <section class="banner">
				<div class="content text-center">
					<div class="text-center top-text">
	                    <!-- Main Heading Starts -->
						<div class="text-center top-text">
							<h1>blog posts</h1>
						</div> 
						<!-- Main Heading Ends -->
						<hr>
	                    <!-- Breadcrumb Starts -->
						<ul class="breadcrumb">
							<li><a href="{{url('/')}}"> home</a></li>
							<li>blog</li>
						</ul>
						<!-- Breadcrumb Ends -->
	                </div>
				</div>
			</section>
			<!-- Banner Ends -->
	        <!-- Section Content Starts -->
	        <section class="blog">
				<div class="container">
					<div class="row">
						<div class="content col-xs-12 col-md-12">
							<!-- Article Starts -->
							@foreach($allblog as $row)
							<article class="col-md-4">
								<a href="{{route('blog.details',$row->id)}}"><h4>{{$row->name}}</h4></a>
								<!-- Figure Starts -->
								<figure>
									<a href="{{route('blog.details',$row->id)}}">
										<img class="img-responsive" src="{{asset('public/backend/blog/'.$row->image) }}" alt="">
									</a>
								</figure>
								<!-- Figure Ends -->
								<!-- Excerpt Starts -->
								<p class="excerpt-blog">{{$row->description}}</p>
								<!-- Excerpt Ends -->
								<a class="custom-button" href="{{route('blog.details',$row->id)}}">Read more</a>
								<!-- Meta Starts -->
								<div class="meta">
								
								<!-- Meta Ends -->
							</article>
							@endforeach
							
						</div>
					</div>
				</div>
			</section>
@endsection