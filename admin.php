<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="logo/Lavender%20icon-02.png">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="styles/admin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-3 sidebar">
      <h2 class="mb-4">Admin Dashboard</h2>
      <ul class="list-unstyled">
        <li><a href="admin.php">Dashboard</a></li>

        <li><a href="add-user.php">Add new Users</a></li>

        <li><a href="add-item.php">Add Item</a></li>
        <li><a href="manage-item.php">Manage Item</a></li>
        <li><a href="admin.php">View Orders</a></li>
        <li><a href="admin.php">Settings</a></li>
        <li><a href="admin.php">About</a></li>
        <button class="btn btn-primary"><a href="logout.php">Logout  <i class="fa-solid fa-right-from-bracket fa-fade" style="color: #ff2c11;"></i></a></button>
      </ul>
    </nav>
    <!-- Main Content -->
    <div class="col-md-9 dashboard-content">
      <h1 class="mb-4">Welcome, Admin</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
              <p class="card-text">1,250</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Total Views</h5>
              <p class="card-text">2,500</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Impression</h5>
              <p class="card-text">1100</p>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <h2 class="mb-4"></h2>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
          </thead>
              <tbody>
              </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/51babe4472.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
