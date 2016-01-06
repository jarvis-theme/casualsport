<section class="sectiondiv">
    <div class="row">
        <h3 class="title">Hasil Pencarian</h3>
    </div>
    <div class="row">
        <div class="twelve columns section">
        @if($jumlahCari != 0)
            <div class="row">
            {{-- */ $row = 0 /* --}}
            @foreach($hasilpro as $products)
                <div class="three columns image photo product">
                    <a href="{{product_url($products)}}">
                        <img src="{{url(product_image_url($products->gambar1,'medium'))}}" id="searchprd" alt="Produk" />
                    </a>
                    <div class="product-detail">
                        <h4 class="title"><a href="{{product_url($products)}}">{{short_description($products->nama,19)}}</a></h4>
                        @if(is_outstok($products))
                        <span class="empty">Kosong</span>
                        @elseif(is_terlaris($products))
                        <span class="sale">Hot</span>
                        @elseif(is_produkbaru($products))
                        <span class="new">Baru</span>
                        @endif
                        <span class="price">
                            @if(!empty($products->hargaCoret))
                            <del><span class="amount">{{price($products->hargaCoret)}}</span></del>&nbsp;
                            @endif
                            <ins><span class="amount">{{price($products->hargaJual)}}</span></ins>
                        </span>
                        <div class="medium oval btn primary default">
                            <a href="{{product_url($products)}}">Lihat</a>
                        </div>
                        {{-- */ $row += 1 /* --}}
                    </div>
                </div>
                @if(($row % 4) == 0 && $row != 0)
                </div>
                <div class="row">
                @endif
            @endforeach
            </div>
            <!-- <h4>Pencarian Artikel</h4> -->
            @if(count($hasilblog) > 0)
            <hr>
            <div class="row">
                @foreach($hasilblog as $blogs)
                <div>
                    <h5><a href="{{blog_url($blogs)}}">{{$blogs->judul}}</a></h5>
                    <div class="meta">
                        <i class="icon-calendar"></i> {{date("d F Y", strtotime($blogs->updated_at))}} <i class="icon-folder"></i>
                        @if(!empty($blogs->kategori->nama))
                        <a href="{{blog_category_url(@$blogs->kategori)}}">{{@$blogs->kategori->nama}}</a>
                        @endif
                    </div>
                    {{short_description($blogs->isi,300)}}
                </div>
                @endforeach
            </div>
            @endif
            @if(count($hasilhal) > 0)
            <hr>
            <div class="row">
                @foreach($hasilhal as $hal)
                <div>
                    <h5><a href="{{menu_url($hal)}}">{{$hal->judul}}</a></h5>
                    {{short_description($hal->isi,300)}}
                </div>
                @endforeach
            </div>
            @endif
        @else
            <article class="text-center"><i>Hasil pencarian tidak ditemukan.</i></article>
        @endif
        </div>
    </div>
</section>