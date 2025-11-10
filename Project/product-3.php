<?php
//define our page title and description
$pageTitle = "Casual Women Hoodie for Fall/Winter";
$pageDesc = "Stay cozy with our Casual Women Hoodie - soft, warm, and made for cooler seasons.";
require './templates/header.php';
?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
         <!-- images of products -->
        <div class="product-container" data-product-id="casual-women-hoodie">
            <div class="product-image-gallery">
                <img src="./img/outfit3.jpg" alt="Black Women Hoodie" class="product-image active">
                <img src="./img/P3color2.jpg" alt="Pink Women Hoodie" class="product-image">
                <img src="./img/P3color3.jpg" alt="White Women Hoodie" class="product-image">
                <img src="./img/P3color4.jpg" alt="Brown Women Hoodie" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>
            <!-- product info -->
            <div class="product-info">
                <h1>Casual Women Hoddie</h1>
                <p>
                    This hoodie brings together warmth and modern style, perfect for chilly days.
                </p>
                 <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$20.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require './templates/footer.php'; ?>