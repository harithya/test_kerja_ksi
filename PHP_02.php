<form method="post" action="PHP_02.php">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Submit</button>
</form>

<style>
    .form-group {
        margin-bottom: 10px;
    }
</style>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $originalPassword = '';
    $passwordArr = str_split($password);
    for ($i = count($passwordArr) - 1; $i >= 0; $i--) {
        $originalPassword .= $passwordArr[$i];
    }

    if ($username == $originalPassword) {
        echo 'Login Berhasil';
    } else {
        echo 'Login Gagal';
    }
}
