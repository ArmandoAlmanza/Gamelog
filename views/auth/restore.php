<main class="login__container">
	<div class="hero"></div>
	<div class="login">
		<div class="logo__container">
			<img src="./favicon.svg" alt="page logo" class="logo">
			<h1>Enter your new password</h1>
		</div>

		<div class="form__container">
			<form method="POST" action="/restore">

				<div class="campo">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password_login" placeholder="Enter your email pls...">
				</div>

				<div class="campo">
					<label for="password">Password repeat: </label>
					<input type="password" name="password" id="password_login" placeholder="Enter your email pls...">
				</div>


			</form>

			<div class="links__container">
				<a href="/" class="link__auth">I already have an account</a>
			</div>

			<div class="btn__container">
				<button id="login__btn" class="btn btn">Save Password</button>
			</div>

			<footer class="site__footer">
				<p>Pagina diseñada y hecha por ArmandoAlmaza</p>

				<div class="social">
					<a target="_blank" href="https://www.facebook.com/ArmyAlmanza/">
						<i class="fa-brands fa-facebook icon__social"></i>
					</a>
					<a target="_blank" href="https://www.instagram.com/jamon_sad/">
						<i class="fa-brands fa-instagram icon__social"></i>
					</a>
					<a target="_blank" href="https://twitter.com/JamonSad03">
						<i class="fa-brands fa-twitter icon__social"></i>
					</a>
					<a target="_blank" href="https://github.com/ArmandoAlmanza">
						<i class="fa-brands fa-github icon__social"></i>
					</a>
				</div>
			</footer>
		</div>

	</div>

</main>