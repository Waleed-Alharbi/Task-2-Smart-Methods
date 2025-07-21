<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Insert User</h2>
<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit">Submit</button>
</form>

<h2>User Records</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= $row['age'] ?></td>
        <td id="status-<?= $row['id'] ?>"><?= $row['status'] ?></td>
        <td>
            <button onclick="toggleStatus(<?= $row['id'] ?>)">Toggle</button>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<script>
function toggleStatus(id) {
    fetch('toggle.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'id=' + id
    })
    .then(response => response.text())
    .then(newStatus => {
        document.getElementById('status-' + id).innerText = newStatus;
    });
}
</script>

</body>
</html>
