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
                            <span class=" -lc-price card-text"><?php echo "Price " . $product->getPrice() . "$" ?></span>

                                <div class="-lc-category"> <!-- cane o gatto -->
                                    <div class="card-text"><?php echo $product->getCategory() ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
        </div>
</body>

<html />