<?php
//define our page title and description
    $pageTitle ="Men Short Sleeve T-shirt";
    $pageDesc = "Comfortable T-Shiirt for Men - casual everyday wear";
    require './templates/header.php';

?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
         <!-- images of products -->
        <div class="product-image-gallery">
                <img src="./img/outfit4.jpg" alt="Brown Short Sleeve Shirt" class="product-image active">
                <img src="./img/P4color1.jpg" alt="Black Men Short Sleeve T-shirt" class="product-image">
                <img src="./img/P4color2.jpg" alt="White Men Short Sleeve T-Shirt" class="product-image">
                <img src="./img/P4color3.jpg" alt="Grey Men Short sleeve T-shirt" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>
            <!-- product info -->
            <div class="product-info">
                <h1>Men Short Sleeve T-shirt</h1>
                <p>
                    For your wardrobe.This t-shirt is perfect for layering, keeping you cool and perfect for any occassion
                </p>
                <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$17.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

</main>
<?php require './templates/footer.php'; ?>