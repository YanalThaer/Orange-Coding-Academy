<?php require_once 'views\layout\admin\header.php' ?>
        <form action="/products/create" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <label>
                    <input name="name" type="text" class="form-control"  aria-describedby="username">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <label>
                    <input name="price" type="number" class="form-control"  aria-describedby="username">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <label>
                    <input name="img_url" type="text" class="form-control"  aria-describedby="username">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <label>
                   <textarea name="description" class="form-control"  aria-describedby="username"></textarea>
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        <?php require_once 'views\layout\admin\footer.php'?>
