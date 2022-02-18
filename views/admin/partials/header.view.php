<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-transparant fixed-top ">
		<div class="container-fluid">
        <a class="navbar-brand fs-1 text-white" href="/"><h1>Admin</h1></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">

                

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle  fs-1 text-white" id="navbarDropdown" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">Actions
						</a>

						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item fs-4" href="/user">List of all users</a></li>
							<li><a class="dropdown-item fs-4" href="/products">List of all products</a></li>
						</ul>
					</li>
				</ul>

				<form class="d-flex ">
					<p class="fs-4 text-white full_session_name"><?= fullNameFromSession() ?></p>
					<a class="btn btn_login fs-3" type="button" href="/logout">Uitloggen</a>
					

                    

               
				</form>
			</div>
		</div>
	</nav>


