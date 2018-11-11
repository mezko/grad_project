@extends('layout.AdminHeader')
@section('header')

@endsection

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Manage Cities</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Manage Cities</h1>
			</div>
        </div><!--/.row-->
<div class="container">
  <div class="row">
      <div class="col-lg-10">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
<form method="POST">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Name In Arabic</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="الاسكندرية" name="ar">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name In English</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="alexandria" name="en">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
        </div>
        </div>




@extends('layout.scripts')
@section('scripts')

@endsection

</body>
</html>
