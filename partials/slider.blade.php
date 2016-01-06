<section>
	<div class="row">
		<div id="slider">
			<a href="#" class="unslider-arrow prev"><i class="icon-left-open-mini"></i></a>
			<a href="#" class="unslider-arrow next"><i class="icon-right-open-mini"></i></a>
			<ul>
				@foreach(slideshow() as $slide)
				<li>
					<div class="tagline">
						@if($slide->text == '')
        				<a href="#">
        				@else
        				<a href="{{filter_link_url($slide->text)}}" target="_blank">
        				@endif
							{{HTML::image(slide_image_url($slide->gambar),'slideshow')}}
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div>	
	</div>
</section>