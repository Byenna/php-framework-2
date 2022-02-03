<ul>
    <?php foreach ($products as $product) : ?>
        <li>
            <a href="/products/<?= $product->id ?>">
                <?= $product->name ?>
            </a>
            
        </li>
    <?php endforeach ?>
</ul>


