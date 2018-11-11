    @yield('scripts')
      <div class="col-sm-12">
				<p class="back-link">Designed By : <a href="#">Mohamed Ahmed</a></p>
			</div>
    <script src="{{asset('js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"type="text/javascript"></script>
	<script src="{{asset('js/chart.min.js')}}"type="text/javascript"></script>
	<script src="{{asset('js/chart-data.js')}}"type="text/javascript"></script>
	<script src="{{asset('js/easypiechart.js')}}"type="text/javascript"></script>
	<script src="{{asset('js/easypiechart-data.js')}}"type="text/javascript"></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}"type="text/javascript"></script>
    <script src="{{asset('js/custom.js')}}"></script>
<script src="http://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js"></script>

	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
