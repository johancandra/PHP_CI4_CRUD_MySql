<!DOCTYPE html>
<html>
<head>
    <title>Data Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Data Admin</h2>
  <a class="btn btn-success mb-3" href="/admin/create">Tambah Admin</a>
  <table border="1" class="col-sm-12 table">
    <tr><th class="col-sm-2">ID</th><th class="col-sm-3">User</th><th class="col-sm-4">Password</th><th class="col-sm-3">Action</th></tr>
    <?php foreach ($admin as $a): ?>
    <tr>
      <td><?= $a['id'] ?></td>
      <td><?= $a['user'] ?></td>
      <td><?= $a['password'] ?></td>
      <td>
        <a href="/admin/edit/<?= $a['id'] ?>">Edit</a> |
        <a href="/admin/delete/<?= $a['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>