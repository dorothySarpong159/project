<?php
//define our page title and description
    $pageTitle ="Men Denim Baggy Jeans";
    $pageDesc = "Explore a collection of Men's Baggy Jeans";
    require './templates/header.php';

?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
         <!-- images of products -->
        <div class="product-image-gallery">
                <img src="./img/outfit5.jpg" alt="Blue Denim Baggy Jeans" class="product-image active">
                <img src="./img/P5color2.jpg" alt="Black Denim Baggy Jeans" class="product-image">
                <img src="./img/P5color3.jpg" alt="Grey Denim Baggy Jeans" class="product-image">
                <img src="./img/P5color4.jpg" alt="Baby blue Denim Baggy Jeans" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>
            <!-- product info -->
            <div class="product-info">
                <h1>Men Denim Baggy Jeans</h1>
                <p>
                   Discover new Denim style, casual and comfortable for everyday outfit
                </p>
                <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$25.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require './templates/footer.php'; ?>
