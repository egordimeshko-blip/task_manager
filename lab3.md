## Використання умов у розмітці та тернарного оператора

```php
<?php
$isLoggedIn = true;
$userName = "Yehor";
?>

<!-- Умова в розмітці -->
<?php if ($isLoggedIn): ?>
    <p>Вітаю, <?= $userName ?>!</p>
<?php else: ?>
    <p>Будь ласка, увійдіть у систему.</p>
<?php endif; ?>

<!-- Тернарний оператор в атрибуті -->
<input type="text" 
       placeholder="Введіть ім'я" 
       value="<?= $isLoggedIn ? $userName : '' ?>" 
       <?= $isLoggedIn ? 'readonly' : '' ?>>
