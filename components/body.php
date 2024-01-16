<body class="text-dark p-5">
    <div class="container">
        <!-- titolo sito -->
        <div class="-lc-title text-center mb-5">
            <h1>BoolCommerce</h1>
            <h3>The Best E-Commerce for Cats and Dogs</h3>
        </div>

        <!-- cards -->
        <div class="row justify-content-center">
            <?php foreach ($shop->catalog as $product) : ?>
                <div class="col-md-4 mb-3">
                    <div class="card rounded-3 shadow-lg  bg-light  p-4">
                        <div class="card-body">
                            <!-- titolo -->
                            <h4 class="card-title mb-4"><?php echo $product->getName() ?></h4>

                            <!-- immagine -->
                            <div class="-lc-img rounded-4 overflow-hidden mb-3">
                                <img src="<?php echo $product->getImage() ?>" alt="<?php echo $product->getName() ?>" ">
                            </div>

                            <!-- prezzo -->
                            <div class=" -lc-price card-text">
                                <?php echo "Price " . $product->getPrice() . "$" ?>
                            </div>

                            <!-- icone -->
                            <div class="-lc-category d-flex gap-2 ">
                                <?php if ($product->getCategory() === 'dog') : ?>
                                    <!-- cane o gatto -->
                                    <div class="card-text"><i class="fa-solid fa-dog"></i></div>
                                <?php else : ?>
                                    <div class="card-text"><i class="fa-solid fa-cat"></i></div>
                                <?php endif; ?>

                                <?php if ($product->getType() === 'food') : ?>
                                    <!-- tipo di prodotto -->
                                    <div class="card-text"><i class="fa-solid fa-bone"></i></div>
                                <?php elseif ($product->getType() === 'toy') : ?>
                                    <div class="card-text"><i class="fa-solid fa-baseball"></i></div>
                                <?php elseif ($product->getType() === 'kennel') : ?>
                                    <div class="card-text"><i class="fa-solid fa-warehouse"></i></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/d7e1ca7451.js" crossorigin="anonymous"></script>
    <!-- fontawesome/ -->
</body>

<html />