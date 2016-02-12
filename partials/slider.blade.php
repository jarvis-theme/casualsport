<section>
    <div class="row">
        @if(slideshow()->count() > 0)
        <div id="slider">
            <a href="#" class="unslider-arrow prev"><i class="icon-left-open-mini"></i></a>
            <a href="#" class="unslider-arrow next"><i class="icon-right-open-mini"></i></a>
            <ul>
                @foreach(slideshow() as $slide)
                <li>
                    <div class="tagline">
                        @if(!empty($slide->url))
                        <a href="{{filter_link_url($slide->url)}}" target="_blank">
                        @else
                        <a href="#">
                        @endif
                            {{HTML::image(slide_image_url($slide->gambar),'Promo '.Theme::place('title'))}}
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</section>