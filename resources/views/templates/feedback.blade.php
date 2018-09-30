@if(session('success'))
	<div class="col-lg-10 col-md-12 col-sm col-xs-12 col-lg-offset-1">
		<div class="alert alert-success">
		  <button type="button" style="transform:translateY(-3px);" class="close pull-right" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  {!! session('success') !!}
		</div>
	</div>
@endif

@if(session('error'))
	<div class="col-md-12 col-sm col-xs-12">
		<div class="alert alert-danger">
		  <button type="button" style="transform:translateY(-3px);" class="close pull-right" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  {!! session('error') !!}
		</div>
	</div>
@endif

@if(@$role)
	<p>This page can only be accessed by <u>{{ $role }}</u></p>
@endif