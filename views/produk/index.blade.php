<section class="sectiondiv">
    <div class="row">
        <h3 class="title">Produk Kami</h3>
    </div>
    <div class="row">
        <div class="three columns sidenav">
            <ul class="sidenav">
                @foreach(main_menu()->link as $menus)
                <li><a href="{{menu_url($menus)}}">{{$menus->nama}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="nine columns section">
            <ul class="breadcrumbs">
                <li><a href="{{url('home')}}">Home</a></li> {{$breadcrumb}}
            </ul>
            <div class="row">
            {{-- */ $row = 0 /* --}}
            @foreach(list_product(null,@$category) as $products)
                <div class="four columns image photo product">
                    <a href="{{product_url($products)}}">
                        <img src="{{url(product_image_url($products->gambar1,'medium'))}}" alt="{{$products->nama}}" />
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
                    </div>
                </div>
                {{-- */ $row += 1 /* --}}
                @if(($row % 3) == 0 && $row != 0)
                </div>
                <div class="row">
                @endif
            @endforeach
            </div>
        </div>
        <div class="pull-right">
            {{list_product(null,@$category)->links()}}
        </div>
    </div>
</section>