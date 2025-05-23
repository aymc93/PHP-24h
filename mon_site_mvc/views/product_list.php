<h1>Liste des produits</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <a href="index.php?action=detail&id=<?= $product['id'] ?>">
                <?= htmlspecialchars($product['name']) ?>
            </a> - <?= number_format($product['price'], 2) ?> €
        </li>
    <?php endforeach; ?>
</ul>
