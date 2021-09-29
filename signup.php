<?php
include_once 'header.php';
?>

          

<section class="signup_form">
<h2> Sign up</h2>
<form action="signup.inc.php" method="post">
<select id="account" name="Account Type">
  <option value="Individual">Individual</option>
  <option value="Shelter">Shelter</option>
</select>
    <input type="text" name="Name" placeholder="Full Name">
    <input type="text" name="Email Address" placeholder="email@example.com">
    <input type="text" name="Username" placeholder="username">
    <input type="text" name="Password" placeholder="password">
    <input type="text" name="Repeat Password" placeholder="repeat password">
    <button type="submit" name="submit">Sign up</Button>
</form>
</section>






<?php
include_once 'footer.php';
?>