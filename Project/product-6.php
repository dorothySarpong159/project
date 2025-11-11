<?php
//define our page title and description
$pageTitle = "Men Hooded Sweatshirt";
$pageDesc = "Discover classic sweatshirt made for men.";
require './templates/header.php';
?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
         <!-- images of products -->
        <div class="product-container" data-product-id="Men hooded sweatshirt">
            <div class="product-image-gallery">
                <img src="./img/outfit6.jpg" alt="Blue Men hooded sweatshir" class="product-image active">
                <img src="./img/P1color2.jpg" alt="Green Men hooded sweatshir" class="product-image">
                <img src="./img/P1color3.jpg" alt=" Brown Men hooded sweatshir" class="product-image">
                <img src="./img/P1color4.jpg" alt=" Black Men hooded sweatshir" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>
            <!-- product info -->
            <div class="product-info">
                <h1>Men Hooded Sweatshirt</h1>
                <p>
                    Refresh your wardrobe with our sweatshirt in all cuts and colors. Shop quality men hoodie designed to offre warmth and comfort.
                </p>
                 <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$40.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require './templates/footer.php'; ?>
