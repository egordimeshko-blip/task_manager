<?php
$appName = "Task Manager";
$taskTitle = "Вивчити основи PHP та створення власних функцій для форматування даних і локалізації дати";

$taskTimeEstimate = 3;
$isCompleted = true;

function formatTitle($text, $maxLength = 20) {
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . "...";
    }
    return $text;
}

function getCurrentGreeting() {
    $hour = date('H');
    if ($hour >= 6 && $hour < 12) {
        return "Доброго ранку";
    } elseif ($hour >= 12 && $hour < 18) {
        return "Добрий день";
    } elseif ($hour >= 18 && $hour < 24) {
        return "Добрий вечір";
    } else {
        return "Доброї ночі";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title><?= $appName ?></title>
    <style>
        .task-done {
            color: green;
            text-decoration: line-through;
        }
        .task-pending {
            color: gray;
        }
    </style>
</head>
<body>

<header>
    <h1><?= getCurrentGreeting() ?></h1>
</header>

<main>
    <ul>
        <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">
            <?= formatTitle($taskTitle) ?>

            <?php if ($isCompleted): ?>
                Виконано
            <?php else: ?>
                В процесі
            <?php endif; ?>
        </li>
        <li><?= $taskTimeEstimate ?> години</li>
    </ul>
</main>

</body>
</html>