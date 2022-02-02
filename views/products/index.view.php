<!-- <ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/products/<?= $product->id ?>">
                <?= $product->name ?>
            </a>
            
        </li>
    <?php endforeach ?>
</ul> -->

<ul>
    <?php foreach ($products as $product) : ?>
        <li><?= $product->name ?></li>
        <li><?= $product->image ?></li>
    <?php endforeach ?>
</ul>
