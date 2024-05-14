<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="registration-container">
        <form action="<?php echo e(route('register-submit')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <h2>Регистрация</h2>
            <div class="input-group">
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="password_confirmation">Подтвердите пароль</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\MAMP\htdocs\example2\resources\views/register.blade.php ENDPATH**/ ?>