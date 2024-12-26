<?php ob_start(); ?>
<h2>Tasks List</h2>


<form method="POST" action="/store">
    <input type="text" name="title" placeholder="enter task title" required>
    <button type="submit"> Create </button>
</form>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
    <?= htmlspecialchars($task['title']) ?>
        <a href="/delete?id=<?= $task['id'] ?>">Delete</a>
    </li>
    <?php endforeach; ?>
</ul>

<?php $content = ob_get_clean(); ?>
<?php require __DIR__ . '/layout.php'; ?>