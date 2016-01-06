<section class="sectiondiv">
	<div class="row">
		<h3 class="title">Member Area</h3>
	</div>
	<div class="row section">
		<div class="six columns">
			<div class="respond">
				<div class="title">
					<h4>Log in</h4>
				</div>
				<form action="{{url('member/login')}}" method="post">
					<ul>
						<li class="field">
					    	<label class="mheight" for="email"><strong>Email</strong></label>
					    	<input class="text input" id="email" type="email" name="email" value="{{Input::old('email')}}" required="required" />
						</li>
						<li class="field">
					    	<label class="mheight" for="pass"><strong>Password</strong></label>
					    	<input class="text input" id="pass" type="password" name="password" required="required" />
						</li>
						<li class="field">
					    	<a href="{{url('member/forget-password')}}">Lupa password? </a>
						</li>
					</ul>
					<div class="medium metro rounded btn primary" type="submit" value="Submit">
						<button>Log in</button>
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