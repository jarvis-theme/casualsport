<section class="sectiondiv">
    <div class="row">
        <div class="six columns aside">
            <form action="{{url('member/forgetpassword')}}" method="post">
                <div class="title">
                    <h4>Lupa Password</h4>
                </div>
                <div class="field row">
                    <div class="three columns tright">
                        <label class="mheight" for="email"><strong>Email</strong></label>
                    </div>
                    <div class="nine columns">
                        <input class="text input" id="email" type="email" name="recoveryEmail" required="required" />
                    </div>
                </div>
                <div class="field row">
                    <div class="three columns tright"></div>
                    <div class="nine columns">
                        <div class="medium metro rounded btn primary">
                            <button type="submit">Reset Password</button>
                        </div>
                    </div>
                </div>
            </form>
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