<section class="sectiondiv">
	<div class="row">
		<!-- <h3 class="title">Customer Service</h3> -->
	</div>
	<div class="row">
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q1">Kebijakan Layanan</a>
			</div>
			<div class="drawer" id="q1">
				<p>{{$service->tos}}</p>
			</div>
		</div>
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q2">Kebijakan Pengembalian</a>
			</div>
			<div class="drawer" id="q2">
				<p>{{$service->refund}}</p>
			</div>
		</div>
		<div class="panel">
			<div class="header">
				<a href="#" class="toggle" gumby-trigger="#q3">Kebijakan Privasi</a>
			</div>
			<div class="drawer" id="q3">
				<p>{{$service->privacy}}</p>
			</div>
		</div>
	</div>
</section>