<section class="sectiondiv">
    <div class="row">
        <h3 class="title"><i class="icon-mail"></i> Hubungi <span>Kami</span></h3>
    </div>
    <div class="row">
        <div class="row section">
            <div class="six columns">
                <div class="respond">
                    <div class="title">
                        <h4>Kirim Pesan</h4>
                    </div>
                    <form action="{{url('kontak')}}" method="post">
                        <ul>
                            <li class="field">
                                <label for="name">Nama</label>
                                <input class="text input" id="name" type="text" name="namaKontak" required="required"/>
                            </li>
                            <li class="field">
                                <label for="email">Email anda</label>
                                <input class="email input" id="email" type="email" name="emailKontak" required="required"/ >
                            </li>
                            <li class="field">
                                <label for="message">Pesan</label>
                                <textarea class="input textarea" rows="3" name="messageKontak" required="required"></textarea>
                            </li>
                        </ul>
                        <div class="medium metro rounded btn primary">
                            <button type="submit">Kirim</button>
                        </div>
                        <div class="pretty medium default btn">
                            <button type="reset">Reset</button>
                        </div>
                    </form>     
                </div>
            </div>
            <div class="six columns">
                <div class="title"><h4>Alamat</h4></div>
                <div class="address">
                    <address>
                        <strong>{{$kontak->nama}}</strong><br>
                        {{$kontak->alamat}}<br />
                        <abbr title="Phone">P:</abbr> {{$kontak->telepon}}<br>
                        <a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
                    </address>
                </div>
                @if($kontak->lat!='0' || $kontak->lng!='0')
                    <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />
                @else
                    <iframe class="maplocation" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{str_replace(' ','+',$kontak->alamat)}}&amp;aq=0&amp;oq={{str_replace(' ','+',$kontak->alamat)}}&amp;sspn={{ $kontak->lat.','.$kontak->lng }}&amp;ie=UTF8&amp;hq=&amp;hnear={{str_replace(' ','+',$kontak->alamat)}}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
                @endif
            </div>
        </div>
        <p><br /></p>
    </div>
</section>