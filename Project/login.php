<?php
//define our page title and description
$pageTitle = "Login Page";
$pageDesc ="Sign in into your account";
require './templates/header.php';
?>
<!-- admin page-->
<main class="admin-page">
    <section class="admin-container">
        <div class="login-page">
            <h1>Login</h1>
            <!-- customer information -->
            <form method="post" action="login.php">
                <label for="login_email">Email</label>
                <input type="email" id="login_email" name="login_email">

                <label for="login_password">Password</label>
                <input type="password" id="login_password" name="login_password">

                <button type="submit" class="btn">Login</button>
</form>
<p class="register-box">Don't have an account?
    <a href ="register.php">Register here</a>
</p>
</div>
</section>
</main>
<?php require './templates/footer.php';?>