<header class="header">
<nav class="container">
	<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top ">
		<div class="container-fluid">
			<a class="navbar-brand fs-1 text-white" href="/">{{ appName }}</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

					<li class="nav-item">
						<a class="nav-link active  fs-1 text-white" aria-current="page" href="/home">Producten</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle  fs-1 text-white" id="navbarDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">Informatie
						</a>

						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item fs-4" href="/about">Wie zijn wij?</a></li>
							<li><a class="dropdown-item fs-4" href="/volunteer">Vrijwilliger worden?</a></li>
							<li><a class="dropdown-item fs-4" href="/products">Naar de details pagina</a></li>
						</ul>
					</li>
				</ul>

				<form class="d-flex ">

					<a class="btn btn_login fs-3" type="button" href="/login">Login</a>
					<a class="btn btn_register fs-3" type="button" href="/register">Registreer</a>

               <?= fullNameFromSession() ?>

               <shopping-cart ref="shoppingCart"></shopping-cart>
				</form>
			</div>
		</div>
	</nav>
</nav>
</header>
