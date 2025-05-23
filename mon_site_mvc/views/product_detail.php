<h1><?= htmlspecialchars($product['name']) ?></h1>
<p><strong>Prix :</strong> <?= number_format($product['price'], 2) ?> €</p>
<p><strong>Description :</strong> <?= nl2br(htmlspecialchars($product['description'])) ?></p>
<p><a href="index.php?action=list">Retour à la liste</a></p>
