<section>
    <div class="row">
        <h3 class="title">Edit <span>Profile</span></h3>
    </div>
    <div class="row">
        <div class="three columns sidenav">
            <ul class="sidenav">
                <li><a href="{{url('member')}}">Order History</a></li>
                <li><a href="{{url('member/profile/edit')}}">Edit Profile</a></li>
            </ul>
        </div>
        <div class="nine columns section">
            {{Form::open(array('url'=>'member/update','method'=>'put','class'=>'form-horizontal'))}}
                <div class="field row">
                    <label class="mheight" for="nama"><strong>Nama</strong></label>
                    <input class="five columns text input" id="inputName" type="text" value="{{$user->nama}}" name="nama" placeholder="Nama" required />
                </div>            
                <div class="field row">
                    <label class="mheight" for="email"><strong>Email</strong></label>
                    <input type="email" class="five columns text input" name="email" value="{{$user->email}}" id="inputEmail1" placeholder="Email" required>
                </div>
                <div class="field row">
                    <label class="mheight"><strong>Telepon</strong></label>
                    <input type="text" class="five columns text input" id="inputPhone" name="telp" value="{{$user->telp}}" placeholder="Telepon" required>
                </div>
                <div class="field row">
                    <label class="mheight" for="country"><strong>Negara</strong></label>
                    <div>
                        {{Form::select('negara',array('' => '-- Pilih Negara --') + $negara , ($user ? $user->negara :(Input::old("negara")? Input::old("negara") :"")), array('required'=>'', 'id'=>'negara', 'class'=>'five columns text input'))}}
                    </div>
                </div>      
                <div class="field row">
                    <label class="mheight"><strong>Provinsi</strong></label>
                    <div>
                        {{Form::select('provinsi',array('' => '-- Pilih Provinsi --') + $provinsi , ($user ? $user->provinsi :(Input::old("provinsi")? Input::old("provinsi") :"")),array('required'=>'','id'=>'provinsi', 'class'=>'five columns text input'))}}
                    </div>
                </div>      
                <div class="field row">
                    <label class="mheight"><strong>Kota</strong></label>
                    <div>
                        {{Form::select('kota',array('' => '-- Pilih Kota --') + $kota , ($user ? $user->kota :(Input::old("kota")? Input::old("kota") :"")),array('required'=>'','id'=>'kota', 'class'=>'five columns text input'))}}
                    </div>
                </div>              
                <div class="field row">
                    <label class="mheight"><strong>Alamat</strong></label>
                    <textarea class="five columns input textarea" rows="3" placeholder="Address" name="alamat" required>{{$user->alamat}}</textarea>
                </div>
                <div class="field row">
                    <label class="mheight"><strong>Kode Pos</strong></label>
                    <input type="text" class="three columns text input" id="inputZip" placeholder="Kode Pos" name="kodepos" value="{{$user->kodepos}}" required>
                </div>
                <hr>
                <div class="field row">
                    <label class="mheight" for="old-pass"><strong>Password Lama</strong></label>
                    <input type="password" class="six columns text input" name="oldpassword" id="inputUsername" placeholder="Password Lama">
                </div>
                <div class="field row">
                    <label class="mheight"><strong>Password Baru</strong></label>
                    <input type="password" class="six columns text input" name="password" id="inputUsername" placeholder="Password">
                </div>
                <div class="field row">
                    <label class="mheight"><strong>Ulang Password</strong></label>
                    <input type="password" class="six columns text input" name="password_confirmation" id="inputPassword" placeholder="Password">
                </div>
                <hr />
                <div class="field row">
                    <div class="medium primary btn metro rounded">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </div>
            {{Form::close()}}
        </div>
    </div>
</section>