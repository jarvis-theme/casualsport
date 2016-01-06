<section>
    <div class="row">
        <h3 class="title">Daftar Member</h3>
    </div>
    <div class="row">
        <div class="six columns aside">
            <form action="{{url('member')}}" method="post">
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="nama"><strong>Nama</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" id="text" type="text" value="{{Input::old('nama')}}" name="nama" required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="email"><strong>Email</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" id="email" type="email" name="email" value="{{Input::old('email')}}" required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="pass"><strong>Password</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" id="pass" type="password" name="password" required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="pass"><strong>Re-Type Password</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" id="pass" type="password" name="password_confirmation" required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight" for="country"><strong>Negara</strong></label>
                    </div>
                    <div class="nine columns">
                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara,Input::old('negara'),array('required', "id"=>"negara", "data-rel"=>"chosen", "class"=>"twelve columns text input"))}}
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight"><strong>Provinsi</strong></label>
                    </div>
                    <div class="nine columns">
                        {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi, Input::old("provinsi"),array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"twelve columns text input"))}}
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight"><strong>Kota</strong></label>
                    </div>
                    <div class="nine columns">
                        {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota, Input::old("kota"),array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"twelve columns text input"))}}
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight"><strong>Alamat</strong></label>
                    </div>
                    <div class="nine columns">
                        <textarea class="input textarea" id="address" rows="3" name='alamat' required>{{Input::old("alamat")}}</textarea>
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight"><strong>Kode Pos</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" type="number" name="kodepos" value='{{Input::old("kodepos")}}' />
                    </div>
                </div>  
                <div class="field row">
                    <div class="three columns tright">
                      <label class="mheight"><strong>Telepon</strong></label>
                    </div>
                    <div class="nine columns">
                      <input class="text input" type="number" name='telp' value='{{Input::old("telp")}}' required />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                        <label class="mheight"><strong>Captcha</strong></label>
                    </div>
                    <div class="nine columns">
                        <div class="six columns">
                            {{ HTML::image(Captcha::img(), 'Captcha image') }}
                        </div>
                        <div class="six columns">
                            {{Form::text('captcha','', array('class'=>'text input','required'=>'required'))}}
                        </div>
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright"></div>
                    <div class="nine columns">
                        <label class="checkbox checked" for="check1">
                            <input name="readme" id="check1" value="1" type="checkbox" />
                            <span></span> Saya telah membaca dan menyetujui <a href="{{url('service')}}" target="_blank">Syarat dan Ketentuan</a>
                        </label>
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright"></div>
                    <div class="nine columns">
                        <div class="medium metro rounded btn primary">
                            <button type="submit">Daftar</button>
                        </div>
                        <div class="pretty medium default btn">
                            <button type="reset">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="six columns">
            <div class="title">
                <h4>Sudah Menjadi Member?</h4>
            </div>
            <p>
                Silahkan menuju halaman login sekarang juga.
                <div class="medium metro rounded btn primary">
                    <a href="{{url('member')}}">Login</a>
                </div>
            </p>
        </div>
    </div>
</section>