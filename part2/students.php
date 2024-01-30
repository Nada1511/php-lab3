<?php
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => '.Net'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'PHP'],
];
?>

<h1> Application name: PHP class registration </h1>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
    <tr <?php echo $student['status'] === 'PHP' ? 'style="color: #FF0000;"' : ''; ?>>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['status']; ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>