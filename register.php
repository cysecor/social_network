<?php
include('inc/header.php');
login_check_pages();
?>

    <div>
        <?php display_message(); ?>
        <?php validate_user_registration(); ?>
    </div>

    <form method="POST">
        <input type="text" name="first_name" placeholder="First Name" value="" required>
        <input type="text" name="last_name" placeholder="Last Name" value="" required>
        <input type="text" name="username" placeholder="Username" value="" required>
        <input type="email" name="email" placeholder="Email Address" value="" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" name="register-submit" value="Register Now">
    </form>

<?php
include('inc/footer.php');
?>