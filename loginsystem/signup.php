<?php
    include_once 'header.php';
?>
    <section class="main-containers">
        <div class="main-wrapper">
            <h2>Sign up</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd" placeholder="Input Password again">
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
    </section>

<?php
    include_once 'footer.php';
?>
 