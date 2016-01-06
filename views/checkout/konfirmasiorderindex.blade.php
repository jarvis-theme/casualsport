<section class="sectiondiv">
    <div class="row">
        <div class="eight columns aside">
            <form action="{{url('konfirmasiorder')}}" method="post">
                <div class="title"><h4>Konfirmasi Order</h4></div>
                <div class="field row">
                    <div class="three columns tright">
                        <label class="mheight" for="email"><strong>Kode Order</strong></label>
                    </div>
                    <div class="nine columns">
                        <input class="text input" name="kodeorder" required="required" />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright"></div>
                    <div class="nine columns">
                        <div class="medium metro rounded btn primary" type="submit">
                            <button>Cari Kode</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="three columns">
            <div class="center">
                @foreach(vertical_banner() as $banner)
                {{HTML::image(banner_image_url($banner->gambar),'Info Promo')}}
                @endforeach
            </div>
        </div>
    </div>
</section>