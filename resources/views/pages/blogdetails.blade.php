@extends('layouts.app')

@section('content')
<section class="banner banner-blog-post">
			<div class="content text-center">
				<div class="text-center top-text">
                    <!-- Main Heading Starts -->
					<div class="text-center top-text">
						<h1>Blog Details</h1>
					</div> 
					<!-- Main Heading Ends -->
					<hr>
                    <!-- Meta Starts -->
					
					<!-- Meta Ends -->
                </div>
			</div>
		</section>
		<!-- Banner Ends -->
        <!-- Section Content Starts -->
        <section class="blog">
			<div class="container">
				<div class="row">
					<div class="content col-xs-12 col-md-8">
						<!-- Article Starts -->
						<article>
							<!-- Figure Starts -->
							<figure>
								<a href="blog-post.html">
									<img class="img-responsive" src="{{asset('public/backend/blog/'.$details->image) }}" alt="">
								</a>
							</figure>
							<!-- Figure Ends -->
							<!-- Content Starts -->
							<p class="content-article">{{$details->description}}.</p>
						
						
						
						</article>
						<!-- Article Ends -->
					</div>
					<!-- Sidebar Starts -->
				
					<!-- Sidebar Ends -->
				</div>
			</div>
		</section>
		@endsection