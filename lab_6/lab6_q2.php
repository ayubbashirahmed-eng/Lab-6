<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21,
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20,
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22,
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 6 Q2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Students</h1>
        <table>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Program</th>
                    <th scope="col">Age</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['name'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($student['program'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= $student['age'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
