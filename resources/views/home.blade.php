@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="placeholder-bkgrnd">
		</div>
	</div>
</div>

<div id="about-section" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<pre>hello motherfucking world</pre>				
			</div>
		</div>
	</div>
</div>

<div id="images-section" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<img id="gallery-img" class="img-responsive" src="/images/placeholdRoostr.png" alt="roostr1" />
			</div>
			<div class="col-sm-4">
				<img id="gallery-img" class="img-responsive" src="/images/placeholdRoostr.png" alt="roostr2" />
			</div>
			<div class="col-sm-4">
				<img id="gallery-img" class="img-responsive" src="/images/placeholdRoostr.png" alt="roostr3" />
			</div>
		</div>
	</div>
</div>

<div id="next-section" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<code>test test test test</code>
			</div>
		</div>
	</div>
</div>

<div id="footer-section">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<footer>
					<p>&copy;2015 Winston LLC</p>
				</footer>
			</div>
		</div>
	</div>
</div>
@endsection
