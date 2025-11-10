<?php
//define our page title and description
$pageTitle = "Baggy Women Jeans";
$pageDesc = "Shop the Baggy Women Jeans - relaxed, trendy, and perfect for effortless street style.";
require './templates/header.php';
?>
<!-- main page -->
<main class="product-page">
    <section class="product-detail">
        <!-- images of products -->
        <div class="product-container" data-product-id="casual-baggy-jeans">
            <div class="product-image-gallery">
                <img src="./img/outfit2.jpg" alt="Black Baggy Women Jeans" class="product-image active">
                <img src="./img/P2color2.jpg" alt="Light Wash Baggy Women Jeans" class="product-image">
                <img src="./img/P2color3.jpg" alt="Grey Baggy Women Jeans" class="product-image">
                <img src="./img/P2color4.jpg" alt="Light Grey Baggy Women Jeans" class="product-image">
                <button class="gallery-nav prev" aria-label="Previous Image">&#10094;</button>
                <button class="gallery-nav next" aria-label="Next Image">&#10095;</button>
            </div>

            <!-- product info -->
            <div class="product-info">
                <h1>Baggy Women Jeans</h1>
                <p>
                    Designed for everyday comfort and confidence, these jeans feature a relaxed fit that pairs easily with any top.
                </p>
               
                <!-- product price -->
                <div class="price-and-cart">
                    <span class="price">$15.00</span>
                    <button class="buy-button" id="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require './templates/footer.php'; ?>