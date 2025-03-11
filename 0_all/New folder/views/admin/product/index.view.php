<?php require_once 'views\layout\admin\header.php' ?>
<div>
    <a href="/products/create" class="btn btn-primary">Create Product</a>
    <div class="container">
    <?php if (!empty($products)): ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
        <tr>
            <th>Product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>IMG</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            <?php $counter = 0; ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $counter = $counter + 1 ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><img class="custom-class" src="<?= htmlspecialchars($product['img_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" height="40"></td>
                <td>
                    <!-- Show link (GET) -->
                    <a href="/products/<?= $product['productid'] ?>">Show</a>
                    <!-- Edit link (GET) -->
                    <a href="/products/<?= $product['productid'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/products/<?= $product['productid'] ?>" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>
    </div>
</div>

<?php require_once 'views\layout\admin\footer.php'?>
