<?php
    $pageTitle ="Contact Us";
    $pageDesc = "Get in touch with us";
    require './templates/header.php';
?>

<main class="contact-page">
<section class="contact-section">
    <h1 class="contact-title">Contact Us</h1>
      <div class="contact-content">
        <h2 class="form-intro"> How can we help?</h2>
    <p class="contact-intro-text">
      Got questions? Our team is always happy to help - whether you need styling tips, size guidance or support with your order.
    </p>
    <form action="contact.php" method="POST" class="contact-form">
        <div class="form-grid">

            <div class="form-field">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>

            <div class="form-field">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <div class="form-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-field">
                <label for="country">Country</label>
                <select name="country" id="country" required>
                    <option value="" disabled selected hidden>Select Country</option>
                    <option value="Canada">Canada</option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Germany">Germany</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="message-area">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="10" placeholder="Message..."></textarea>
            </div>

            <div class="form-field">
                <label for="details">P-number, order number, requested size</label>
                <input type="text" id="details" name="details">
            </div>

        </div>  
            <div class="submit-group">
                <button type="submit" class="btn-primary">Send Message</button>
            </div>


    </form>

    <div class="contact-help-column">
        <div class="contact-help">
        <h2 class="help-heading">Talk with us</h2>
        <p class="help-text">
            Give us a call at +1 (676) 454 8867
            Available Mon-Fri, 8am-7pm ET
        </p>
    </div>
</div>
</div>
</section>
</main>

<?php include './templates/footer.php'; ?>
