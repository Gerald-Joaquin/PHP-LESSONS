<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
        /* General */
body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
}

/* Container */
.container {
    width: 90%;
    max-width: 800px;
    margin: 40px auto;
    background: #fff;
    padding: 20px 30px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

/* Header */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Button */
.btn, button {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 8px 14px;
    text-decoration: none;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
}

.btn:hover, button:hover {
    background-color: #0056b3;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #e9ecef;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Form */
.form-box {
    display: flex;
    flex-direction: column;
}

.form-box label {
    margin-top: 10px;
    margin-bottom: 4px;
}

.form-box input {
    padding: 8px;
    font-size: 14px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form-actions {
    margin-top: 20px;
    display: flex;
    gap: 10px;
}

/* Action Links */
.action {
    padding: 6px 10px;
    border-radius: 4px;
    font-size: 13px;
    text-decoration: none;
    color: white;
}

.edit {
    background-color: #ffc107;
}

.edit:hover {
    background-color: #e0a800;
}

.delete {
    background-color: #dc3545;
}

.delete:hover {
    background-color: #c82333;
}

    </style>
</head>
<body>
<div class="container">
    <h1>User Management</h1>
    <a href="add.php" class="btn">➕ Add User</a>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM users";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="action edit">✏️ Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="action delete" onclick="return confirm('Delete this user?')">🗑️ Delete</a>
                </td>
            </tr>
        <?php endwhile; else: ?>
            <tr><td colspan="4" style="text-align:center;">No users found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
