@extends('layout.AdminHeader')
@section('header')

@endsection

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Service</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Service</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                @if (session('alert'))
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
                @endif
                <form method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!--name of services-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Of Service</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name Of Service" name="name">

                    </div>
                    <!--description-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="short"
                            name="short">
                            <!--hidden elements of lat and long-->
                            <input type="hidden" class="form-control" name="lat" id="lat">
      <input type="hidden" class="form-control" name="lng" id="lng">
                    </div>
                    <!--long description-->
                    <label for="exampleInputPassword1">Long Description</label>
                    <textarea class="form-control" aria-label="With textarea" name="long_desc"></textarea>
                     <div class="form-group">
                         <!--logo-->
    <label for="exampleFormControlFile1">Select logo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="logo">
  </div>
  <div class="form-group ">
      <!--cities-->
      <label for="inputState">Select City</label>
      <select id="inputState" class="form-control" name="city">
        <option selected>Choose...</option>
        @foreach ($cities as $city)
      <option value="{{$city->id}}">{{$city->name_en}}</option>
        @endforeach

      </select>
    </div>
    <!--Select catogries-->
    <div class="form-group">
        @foreach ($cat as $cats)
  <input class="form-check-input" type="checkbox" value="{{$cats->id}}" id="defaultCheck1" name="cat[]">

    <label class="form-check-label" for="defaultCheck1"  >
    {{$cats->name_en}}
  </label>
  @endforeach
</div>

           <!--google map-->


    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
    <script>

      // The following example creates a marker in Stockholm, Sweden using a DROP
      // animation. Clicking on the marker will toggle the animation between a BOUNCE
      // animation and no animation.

      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 59.325, lng: 18.070}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 59.327, lng: 18.067}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce(event) {
          var getlat=document.getElementById('lat');
          var getlng=document.getElementById('lng');
       getlat.value=event.latLng.lat();
       getlng.value= event.latLng.lng();


        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkfAwoXIKThbzY5EMAJ46Q79f3yC-oSqI&callback=initMap">
    </script>



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
