<!DOCTYPE html>
<html>

@include('common.head')

<body>
	@include('common.header')
      <section>
		<div class="section-bg">
			<div class="container">
				<div class="row">
				<div class="contents">


	@yield('content')
	</div>
	</div>
	</div>
	</div>
	</section>
	@include('common.footer')
</body>
</html>