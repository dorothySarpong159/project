<?php
//define our page title and description
$pageTitle = "Shop";
$pageDesc = "Explore the latest fashion collection";
require './templates/header.php';
?>
<!-- main page -->
<main class="shop-page">
    <section class="shop-intro">
        <h1>Shop the latest fashion trends</h1>
        <p>Step into the world of fresh fits, trending styles, and bold confidence.</p>
</section>

<!-- product 1-->
<section class="product-grid">
    <article class="product-card">
        <a href="product-1.php">
        <img src="./img/outfit1.jpg" alt="Women Top">
        <h2>Casual Women Top</h2>
</a>
<a href= "product-1.php" class="view-btn">View Details</a>
</article>

<!-- product 2 -->
 <article class="product-card">
        <a href="product-2.php">
        <img src="./img/outfit2.jpg" alt="Women Jeans">
        <h2>Baggy Women Jeans</h2>
</a>
<a href= "product-2.php" class="view-btn">View Details</a>
</article>

<!-- product 3 -->
 <article class="product-card">
        <a href="product-3.php">
        <img src="./img/outfit3.jpg" alt="Women Hoodie">
        <h2>Casual Women Hoodie for Fall/Winter</h2>
</a>
<a href= "product-3.php" class="view-btn">View Details</a>
</article>

<!-- product 4 -->
 <article class="product-card">
        <a href="product-4.php">
        <img src="./img/outfit4.jpg" alt="Men Top">
        <h2>Men Short Sleeve T-Shirt</h2>
</a>
<a href= "product-4.php" class="view-btn">View Details</a>
</article>

<!-- product 5 -->
 <article class="product-card">
        <a href="product-5.php">
        <img src="./img/outfit5.jpg" alt="Men Jeans">
        <h2>Men Denim Baggy Jeans</h2>
</a>
<a href= "product-5.php" class="view-btn">View Details</a>
</article>

<!-- product 6 -->
 <article class="product-card">
        <a href="product-6.php">
        <img src="./img/outfit6.jpg" alt="Men Hoodie">
        <h2>Men Hooded Sweatshirt</h2>
</a>
<a href= "product-6.php" class="view-btn">View Details</a>
</article>
</section>
</main>
<?php require './templates/footer.php'; ?>
