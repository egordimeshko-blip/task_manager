<?php
$appName = "Task Manager";

$tasks = [
    [
        'id' => 1,
        'title' => "Виконати лабораторну роботу №5",
        'priority' => "High",
        'is_completed' => false
    ],
    [
        'id' => 2,
        'title' => "Прочитати конспект з PHP",
        'priority' => "Medium",
        'is_completed' => true
    ],
    [
        'id' => 3,
        'title' => "Підготувати звіт lab5.md",
        'priority' => "High",
        'is_completed' => false
    ],
    [
        'id' => 4,
        'title' => "Зробити git commit та push",
        'priority' => "Low",
        'is_completed' => true
    ]
];

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
        <?php foreach ($tasks as $task): ?>
            <li class="<?= $task['is_completed'] ? 'task-done' : 'task-pending' ?>">
                <?= formatTitle($task['title']) ?> 
                (Пріоритет: <?= $task['priority'] ?>) —
                <?= $task['is_completed'] ? "Виконано" : "В процесі" ?>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

</body>
</html>