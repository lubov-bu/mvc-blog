<?php
require_once __DIR__ . '/head.php';
?>
<?php
require_once __DIR__ . '/header.php';
?>
<form action="/create-user" method="post" class="login__form">
    <p>Registration</p>
    <label>
        <input type="text" name="name" minlength="2" maxlength="32"
               placeholder="Enter your name" required>
    </label>
    <label>
        <input type="tel" name="phone" pattern="^\+7[1-9]{10}$" placeholder="Enter your phone">
    </label>
    <label>
        <input type="email" name="email" placeholder="Enter your email" required>
    </label>
    <label>
        <input type="password" name="password" placeholder="Create password" required>
    </label>
    <label>
        <input type="password" name="password2" placeholder="Repeat password" required>
    </label>
    <button type="submit">registration</button>
</form>
</body>
</html>