<?php
$pageTitle = "Register Page";
$pageDesc ="Create an account";
require './templates/header.php';
?>
<main class="admin-register">
    <section class="admin-register-container">
        <div class="register-page">
            <h1>Register</h1>
            <form method="post" action="register.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">

                <label for="email">Email</label>
                <input type="email" id="email" name="email">

                <label for="password">Password</label>
                <input type="password" id="password" name="password">

                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <button type="submit" class="btn">Register</button>
</form>
</div>
</section>
</main>
<?php require './templates/footer.php'; ?>
