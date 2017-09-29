        <aside class="first">
            <div class="row">
                <div class="three columns">
                    <h4 class="title">{{short_description(Theme::place('title'),23)}}</h4>
                    <div class="social">
                        @if(!empty($kontak->fb))
                        <a href="{{url($kontak->fb)}}" target="_blank">
                            <i class="icon-facebook" title="Facebook"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->tw))
                        <a href="{{url($kontak->tw)}}" target="_blank">
                            <i class="icon-twitter" title="Twitter"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->gp))
                        <a href="{{url($kontak->gp)}}" target="_blank">
                            <i class="icon-gplus" title="Google+"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->pt))
                        <a href="{{url($kontak->pt)}}" target="_blank">
                            <i class="icon-pinterest" title="Pinterest"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->ig))
                        <a href="{{url($kontak->ig)}}" target="_blank">
                            <i class="icon-instagram" title="Instagram"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->tl))
                        <a href="{{url($kontak->tl)}}" target="_blank">
                            <i class="icon-tumblr" title="Tumblr"></i>
                        </a>
                        @endif
                        @if(!empty($kontak->picmix))
                        <a href="{{url($kontak->picmix)}}" class="picmix" title="Picmix" target="_blank">
                            <img src="//d3kamn3rg2loz7.cloudfront.net/blogs/event/icon-picmix.png">
                        </a>
                        @endif
                    </div>
                </div>
                <div class="five columns">
                    <h4>Newsletter</h4>
                    <form action="{{@$mailing->action}}" method="post" target="_blank">
                        <div class="append field">
                            <input class="wide email input" type="email" nama="email" placeholder="Masukkan email anda" {{ @$mailing->action==''?'disabled="disabled"':'' }} />
                            <div class="medium primary btn">
                                <button type="submit" {{ @$mailing->action==''?'disabled style="cursor:default"':'' }}>Subscribe</button>
                            </div>
                        </div>
                        <p>Dapatkan info produk terbaru & penawaran menarik lainnya</p>
                    </form>
                </div>
                <div class="four columns">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li>
                            <i class="icon-home"></i>
                            {{$kontak->alamat}}
                        </li>
                        <li>
                            <i class="icon-phone"></i>@if(empty($kontak->telepon) && empty($kontak->hp))
                            -
                            @elseif(!empty($kontak->telepon) && empty($kontak->hp))
                            {{$kontak->telepon}}
                            @elseif(empty($kontak->telepon) && !empty($kontak->hp))
                            {{$kontak->hp}}
                            @else
                            {{$kontak->telepon.' - '.$kontak->hp}}
                            @endif
                        </li>
                        <li>
                           <i class="icon-mobile"></i> {{empty($kontak->bb) ? '-' : $kontak->bb}} <small>(BBM)</small>
                        </li>
                        <li>
                           <i class="icon-mail"></i> {{$kontak->email}}
                        </li>
                        @if(empty($kontak->ym))
                        <li>
                            <i class="icon-a"></i> {{$kontak->ym}}
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </aside>
        <aside class="last footer-menu">
            <div class="row">
                @foreach(all_menu() as $group)
                <div class="three columns">
                    <h4>{{$group->nama}}</h4>
                    <ul>
                    @foreach($group->link as $link)
                        @if($group->id == $link->tautanId)
                        <li>
                            <a href="{{menu_url($link)}}">{{$link->nama}}</a>
                        </li>
                        @endif
                    @endforeach
                    </ul>
                </div>
                @endforeach
                <div class="three columns">
                    @foreach(list_banks() as $bank)
                        @if($bank->status == 1)
                        {{HTML::image(bank_logo($bank), $bank->bankdefault->nama, array('title'=>$bank->bankdefault->nama))}}
                        @endif
                    @endforeach
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img src="{{url('img/bank/paypal.png')}}" alt="Paypal" title="Paypal" />
                        @endif
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img src="{{url('img/bank/ipaymu.jpg')}}" alt="ipaymu" title="Ipaymu" />
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img src="{{url('img/bitcoin.png')}}" alt="Bitcoin" title="Bitcoin" />
                        @endif
                    @endforeach
                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                    <img src="{{url('img/bank/doku.jpg')}}" alt="Doku Payment" title="Doku">
                    @endif
                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                    <img class="midtrans" src="{{url('img/bank/midtrans.png')}}" alt="Midtrans" title="Midtrans">
                    @endif
                </div>
            </div>
        </aside>
        <footer>
            <div class="row">
                <div class="twelve columns">
                    &copy; {{ short_description(Theme::place('title'),80) }} {{date('Y')}} All Right Reserved. Powered by <a class="nodecoration" target="_blank" href="http://jarvis-store.com"> Jarvis Store</a>
                    <div class="skiplink small oval btn default"><a href="#" gumby-goto="[data-target='header-position']"><i class="icon-up-open"></i></a></div>
                </div>
            </div>
        </footer>
        {{pluginPowerup()}} 