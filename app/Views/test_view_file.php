<!-- test_view_file.php -->

<!DOCTYPE html>
<html>
<header>
    <tittle><?= $title ?></tittle>
</header>
<body>
    <h1><?= $heading ?></h1>

    <table>
        <thead>
            <tr>
                <th>Time Used</th>
                <th>Step</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($todo_list as $week => $tasks) : ?>
                    <tr>
                        <td><?= $week ?></td>
                        <?php foreach ($tasks as $task) : ?>
                        <td><?= $task ?></td>
                        <?php endforeach; ?>
                    </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>