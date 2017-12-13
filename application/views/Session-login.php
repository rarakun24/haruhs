<div class="container">
	<br/>

	<div class="row">
		<div class="col-md-6">
			<h1>Sukses Login</h1>

			<p>Selamat Datang <strong><?=$user['nama'];?></strong></p>

			<table class="table table-striped">

			<thead>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?=$user['nama'];?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>Jl. Didi Prawira kusumah No.1 Maleber Cianjur </td>
				</tr>
				<tr>
					<td>TTL</td>
					<td>:</td>
					<td>Cianjur, 30 oktober 1996</td>
				</tr>
				<tr>
					<td>No HP</td>
					<td>:</td>
					<td>083817051685</td>
				</tr>
			</thead>

			</table>


			<a href="dashboard/logout" class="btn btn-primary">Logout</a>
		</div>

		<div>
			<style type="text/css">
		#map {
			width: 50%;
			height: 400px;
			border: 1px solid grey;
		}
	</style>
	<title></title>
</head>
<body>
<h1>Google Map API</h1>
	<div id="map"></div>
	<script type="text/javascript">
		function initMap() {
			var myCenter = new google.maps.LatLng(-6.805810,107.140397);
			var mapDiv = document.getElementById('map');
			var map = new google.maps.Map(mapDiv, {
				center : myCenter,
				zoom : 17,
				zoomControl : true,
			});

			var marker = new google.maps.Marker ({
				position : myCenter,
				city : Cianjur,
			});

			marker.setMap(map);
		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAF8AG-zP49YRRCMIKfJz4v6RMY1dSJ9s&callback=initMap"></script>
		</div>
	</div>
</div>