<?php require 'views/admin/partials/header.view.php' ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 space_above_content"></div>
  </div>

  <div class="row" style="width: 30rem;">
    <div class="col-md-12">
      <div class="card" >
        <img src="/public/images/website/dummy.png" class="card-img-top" alt="dummy">
        <div class="card-body ">
          <h5 class="card-title">Name: <?= $user->first_name ?></h5>
          <p class="card-text">Email: <?= $user->email ?></p>

          <a href="/user/<?= $user->id ?>/edit">
            <button class="btn ">Edit</button>
          </a>

          <a href="/user/<?= $user->id ?>/destroy">
            <button class="btn destroy_btn">Destroy</button>
          </a>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 space_above_content"></div>
  </div>
</div>

<?php require 'views/admin/partials/footer.view.php' ?>