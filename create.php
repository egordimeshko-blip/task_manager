<?php
$errors = [];
$tasks = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST["title"] ?? "");
    $description = trim($_POST["description"] ?? "");

    if ($title === "") {
        $errors[] = "Назва є обов’язковою";
    }
    if ($description === "") {
        $errors[] = "Опис є обов’язковим";
    }

    if (empty($errors)) {
        $tasks[] = [
            "title" => $title,
            "description" => $description,
            "priority" => $_POST["priority"] ?? "Low",
            "is_completed" => false
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Створити завдання</title>
    <style>
        .error { color: red; }
        .task-done { color: green; text-decoration: line-through; }
        .task-pending { color: gray; }
    </style>
</head>
<body>

<h1>Нове завдання</h1>

<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $error): ?>
        <p class="error"><?= $error ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<form action="create.php" method="POST">
    <label>Назва:
        <input type="text" name="title">
    </label><br><br>

    <label>Опис:
        <textarea name="description"></textarea>
    </label><br><br>

    <label>Пріоритет:
        <select name="priority">
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>
    </label><br><br>

    <button type="submit">Зберегти</button>
</form>

</body>
</html>
