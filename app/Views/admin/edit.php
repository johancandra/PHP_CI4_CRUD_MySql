<!DOCTYPE html>
<html>
<head>
    <title>Edit Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit Admin</h2>
    <form action="/admin/update/<?= $admin['id'] ?>" method="post">
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" name="user" class="form-control" value="<?= $admin['user'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" value="<?= $admin['password'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/admin" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
