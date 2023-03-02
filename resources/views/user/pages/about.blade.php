@extends('user.layout.master')
@section('content')



<!-- page title -->
<section class="section section--first section--bg" data-bg="{{('frontend/main/img/section/section.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">About</h1>
					<!-- end section title -->

					<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{('dashboard')}}">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">About</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end page title -->

@endsection