<?php require_once 'views\layout\admin\header.php' ?>
        <form action="/products/<?= $product['productid'] ?>/edit" method="POST">
            <!-- Use a hidden input to tell your system to treat it as PUT -->
            <input type="hidden" name="_method" value="PUT" />
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <label>
                    <input name="name" type="text" class="form-control"  aria-describedby="username" value="<?= $product['name'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <label>
                    <input name="price" type="number" class="form-control"  aria-describedby="username" value="<?= $product['price'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <label>
                    <input name="img_url" type="text" class="form-control"  aria-describedby="username" value="<?= $product['img_url'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <label>
                    <textarea name="description" class="form-control"  aria-describedby="username"><?= $product['description'] ?></textarea>
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
<?php require_once 'views\layout\admin\footer.php'?>
