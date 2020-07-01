<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/login.css">
</head>

<body>
    <div class="loginarea">
        <form method="post">
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" autofocus>
            <input type="password" name="password" id="password" placeholder="Digite sua senha"> <br>
            <input type="submit" value="Entrar">
            <?php if (isset($error) && !empty($error)) : ?>
                <div class="warning"><?php echo $error ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>