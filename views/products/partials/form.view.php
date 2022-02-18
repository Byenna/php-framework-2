<div class="center-box register-form">

<form method="<?= $method ?>" action="<?= $action ?>">
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
                <input type="text" name="name" placeholder="Naam" value="<?= isset($product) ? $product->name : '' ?>">
            </div>

            <div class="col-md-6">
                <input type="text" name="description" placeholder="Beschrijving" value="<?= isset($product) ? $product->description : '' ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" name="price" placeholder="Prijs" value="<?= isset($product) ? $product->price : '' ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" name="stock" placeholder="Voorraad" value="<?= isset($product) ? $product->stock : '' ?>">
            </div>
        </div>

     
        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" value="Opslaan">
    </div>
</form>

</div>