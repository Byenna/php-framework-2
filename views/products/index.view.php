<section class="bg-overlay">

    <?php require 'views/admin/partials/header.view.php' ?>

    <div class="container">

        <div class="row">
            <div class="col space_above_content"></div>
        </div>

        <div class="row mb-4 ">
            <div class="col-md-4 "></div>
            <div class="col-md-4 text-white text-center ">
                <h1 class="text-nowrap display-1">De productendetails</h1>
                <div ><a class="fs-2 link_create_user text-white" href="/products/create">Create new product</a></div>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 pt-3">

                    <div class="card border-0">

                        <img src="<?= '/public/images/webshop/' . $product->image ?> " class="img_items_admin card-img-top shadow rounded-top" alt="<?= $product->image ?>">

                        <div class="card_body_items card-body">
                            <h5 class="card-title fs-3 fw-bold"><?= $product->name ?></h5>
                            <p class="card-text" style="height: 5rem;"><?= $product->description ?></p>
                            <p class="card-text"> € <?= $product->price ?></p>
                            <p>Voorraad: <?= $product->stock ?></p>
                            <div class="row">
                                <p class="fs-3 link_show_product"><a href="/products/<?= $product->id ?>">
                                        Show product
                                    </a></p>
                            </div>





                        </div>
                    </div>
                </div>

            <?php endforeach ?>


        </div>

    </div>

    <div class="row">
        <div class="col space_under_content"></div>
    </div>
</section>
<?php require 'views/admin/partials/footer.view.php' ?>