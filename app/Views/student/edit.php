<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Edit Student</h2>
    <form action="/student/update/<?= $student['id'] ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?= $student['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" value="<?= $student['age'] ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/student" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
