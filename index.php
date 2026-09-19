<?php

$appName = "Task Manager";

$taskTitle = "Вивчити основи PHP";

$taskTimeEstimate = 3;

$isCompleted = false;

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

    <h1><?= $appName ?></h1>

</header>

<main>

    <ul>

        <li class="<?= $isCompleted ? 'task-done' : 'task-pending' ?>">

            <?= $taskTitle ?>

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