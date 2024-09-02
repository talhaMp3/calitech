	<x-frontend-layout>
		  @section('title', env('APP_NAME') .' || 404')
	<section class="ec-404-error-page-02">
		<div class="container">
		  <div class="row">
			<div class="col-sm-12 text-center p-5">
                
				<img class="img-404" src="{{asset('assets/404-error-page.gif')}}" alt="" />
				<h1 class="main-title text-center">404</h1>
				<a class="th-btn rounded-12 style3 my-5" href="{{route('user.home')}}">Go to Back</a>
			</div>
		  </div>
		</div>
	</section>
	<!-- End main Section -->
</x-frontend-layout>