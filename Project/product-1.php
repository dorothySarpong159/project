<?php
//define our page title and description
$pageTitle = "Casual Women Top";
$pageDesc = "Shop the Casual Women Top - simple, comfy, and perfect for everyday wear.";
require './templates/header.php';
?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
         <!-- images of products -->
        <div class="product-container" data-product-id="casual-women-top">
            <div class="product-image-gallery">
                <img src="./img/outfit1.jpg" alt="Red Casual Women Top" class="product-image active">
                <img src="./img/P1color2.jpg" alt="Cream Casual Women Top" class="product-image">
                <img src="./img/P1color3.jpg" alt="Purple Casual Women Top" class="product-image">
                <img src="./img/P1color4.jpg" alt="Brown Casual Women Top" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>
            <!-- product info -->
            <div class="product-info">
                <h1>Casual Women Top</h1>
                <p>
                    A soft and stylish top that is made for all-day comfort. Breathable cotton material with a relaxed fit.
                </p>
                 <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$12.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require './templates/footer.php'; ?>
