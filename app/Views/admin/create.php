<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Tambah Admin</h2>
    <form action="/admin/store" method="post">
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <input type="text" name="user" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/admin" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
