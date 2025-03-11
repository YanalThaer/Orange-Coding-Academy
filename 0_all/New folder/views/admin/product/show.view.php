<?php require_once 'views\layout\admin\header.php' ?>
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <img class="img-fluid" src="<?php echo $product['img_url'] ?>" alt="Orange" height="40">
                    <h5 class="card-title"><?= $product['name'] ?></h5>
                    <p class="card-text">JOD <?= $product['price'] ?> With Tax</p>
                </div>
            </div>
            <?php require_once 'views\layout\admin\footer.php'?>
