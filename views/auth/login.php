<main class="login__container">
	<div class="hero"></div>
	<div class="login">
		<div class="logo__container">
			<img src="./favicon.svg" alt="page logo" class="logo">
			<h1>Login</h1>
		</div>

		<div class="form__container">
			<form method="POST" action="/">

				<div class="campo">
					<label for="email">Correo Electronico: </label>
					<input type="email" name="email" id="email_login" placeholder="Enter your email...">
				</div>

				<div class="campo">
					<label for="password">Password: </label>
					<input type="password" name="password" id="password_login" placeholder="Enter your password...">
				</div>
			</form>

			<div class="links__container">
				<a href="/forget-password" class="link__auth">I forget my password</a>
				<a href="/register" class="link__auth">I didn't have an account</a>
			</div>


			<div class="btn__container">
				<button id="login__btn" class="btn btn">Log-in</button>
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