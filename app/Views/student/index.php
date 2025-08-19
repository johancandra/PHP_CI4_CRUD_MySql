<!DOCTYPE html>
<html>
<head>
    <title>Data Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Data Student</h2>
  <a class="btn btn-success mb-3" href="/student/create">Tambah Student</a>
  <table border="1" class="col-sm-12 table">
    <tr><th class="col-sm-2">ID</th><th class="col-sm-3">Name</th><th class="col-sm-4">Age</th><th class="col-sm-3">Action</th></tr>
    <?php foreach ($student as $s): ?>
    <tr>
      <td><?= $s['id'] ?></td>
      <td><?= $s['name'] ?></td>
      <td><?= $s['age'] ?></td>
      <td>
        <a href="/student/edit/<?= $s['id'] ?>">Edit</a> |
        <a href="/student/delete/<?= $s['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>