
@extends('user.layout.master')
@section('content')


<!-- page title -->
<section class="section section--first section--bg" data-bg="{{('frontend/main/img/section/section.jpg')}}">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section__wrap">
					<!-- section title -->
					<h1 class="section__title">Contacts</h1>
					<!-- end section title -->

					<!-- breadcrumb -->
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="{{('dashboard')}}">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Contacts</li>
					</ul>
					<!-- end breadcrumb -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end page title -->

<!-- contacts -->
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12">
				<div class="row">
					<!-- section title -->
					<div class="col-12">
						<h2 class="section__title">Contact Form</h2>
					</div>
					<!-- end section title -->

					<div class="col-12">
						<form action="#" class="form form--contacts">
							<input type="text" class="form__input" placeholder="Your Name">
							<input type="text" class="form__input" placeholder="Email">
							<input type="text" class="form__input" placeholder="Subject">
							<textarea id="text" name="text" class="form__textarea" placeholder="Type your message..."></textarea>
							<button type="button" class="form__btn">Send</button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- end contacts -->
@endsection