<section class="bg-overlay">

<?php require 'views/partials/header.view.php' ?>
 

<div class=" container-sm">
    
<div class="row mb-4 ">
            <div class="col-md-4 "></div>
            <div class="col-md-4 text-white text-center "><h1 class="text-nowrap display-1">De users</h1></div>
            <div class="col-md-4"></div>
        </div>
  <?php foreach ($users as $user) : ?> 
    <div class="card">
  <div class="card-body">
    <h5 class="fs-2 card-title"><?= $user -> first_name ?> <?= $user -> last_name ?></h5>
    <h6 class="fs-4 card-subtitle mb-2 text-muted"><?= $user -> city ?></h6>
    <p class="card-text">Email: <?= $user -> email ?></p>
    <a href="#" class="card-link">Edit</a>
    <a href="#" class="card-link">Update</a>
  </div>
</div>
     <?php endforeach ?> 
  </div>
</div>
</div>
   

   
 
<?php require 'views/partials/footer.view.php' ?> 