<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
</head>
<body>
    <h1>Data Entry Form</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="send">
    </form>
    <?php if (isset($users)): ?>
        <h2>Users</h2>
        <ul>
            <?php foreach ($users as $user): ?>
                <li><?php echo $user->getName() . ' - ' . $user->getEmail(); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>