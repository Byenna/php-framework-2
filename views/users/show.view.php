<?php require 'views/admin/partials/header.view.php' ?>

<div class="container">
<div class="row">
		<div class="col space_above_content"></div>
	</div>


<div class="card" style="width: 18rem;">
  <img src="/public/images/website/dummy.png" class="card-img-top" alt="dummy">
  <div class="card-body ">
    <h5 class="card-title"><?= $user->first_name ?></h5>
    <p class="card-text"><?= $user->email ?></p>

    <a href="/user/<?= $user->id ?>/edit">
        <button class="btn btn-primary">Edit</button>
    </a>
    <a href="/user/<?= $user->id ?>/destroy">
    <button class="btn btn-primary">Destroy</button>

    <a href="/user/<?= $user->id ?>/store">
    <button class="btn btn-primary">Store</button>

    <a href="/user/<?= $user->id ?>/update">
    <button class="btn btn-primary">Verwijderen</button>

   
  </div>
</div>
</div>

<?php require 'views/admin/partials/footer.view.php' ?>