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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getName() ?></h5>
                            <span class="card-text"><?php echo $product->getPrice() . "$" ?></span>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

<html />