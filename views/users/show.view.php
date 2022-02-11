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
        <button class="btn ">Edit</button>
    </a>
    

    <a href="/user/<?= $user->id ?>/store">
    <button class="btn ">Store</button>

    <a href="/user/<?= $user->id ?>/destroy">
    <button class="btn destroy_btn">Destroy</button>

   
  </div>
</div>
</div>

<?php require 'views/admin/partials/footer.view.php' ?>