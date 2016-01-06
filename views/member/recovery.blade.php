<section class="sectiondiv">
    <div class="row section">
        <div class="six columns">
            <div class="respond">
                <div class="title">
                    <h4>Forget Password</h4>
                </div>
                {{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code))}}
                    <ul>
                        <li class="field">
                            <label class="mheight" for="password"><strong>Password Baru</strong></label>
                            <input class="text input" id="inputEmail1" type="password" name="password" required />
                        </li>
                        <li class="field">
                            <label class="mheight" for="pass"><strong>Konfirmasi Password Baru</strong></label>
                            <input class="text input" id="inputEmail1" type="password" name="password_confirmation" required>
                        </li>
                    </ul>
                    <div class="medium metro rounded btn primary" type="submit" value="Submit">
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="six columns">
            <div class="title">
                <h4>Member Baru</h4>
            </div>
            <p>
                Dengan mendaftar sebagai member, kamu bisa berbelanja dengan lebih cepat, praktis dan juga dapat melihat history dari order yang kamu buat.
                <div class="medium metro rounded btn primary">
                    <a href="{{url('member/create')}}">Daftar</a>
                </div>
            </p>
        </div>
    </div>
</section>