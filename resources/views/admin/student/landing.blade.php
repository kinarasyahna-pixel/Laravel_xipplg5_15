<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Oh My Cake</title>
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  
</head>
<body>
  <aside class="sidebar">
    <h2 class="logo">🍰 Oh My Cake</h2>
    <ul>
      <li class="active"><a href="#">Dashboard</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Customers</a></li>
      <li><a href="#">Reports</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </aside>

  <main class="main-content">
    <header class="topbar">
      <h1>Welcome, Admin!</h1>
      <div class="profile">
        <span>👩‍🍳 Admin</span>
      </div>
    </header>

    <section class="cards">
      <div class="card">
        <h3>Total Orders</h3>
        <p>128</p>
      </div>
      <div class="card">
        <h3>Revenue</h3>
        <p>$1,245</p>
      </div>
      <div class="card">
        <h3>Pending</h3>
        <p>6</p>
      </div>
      <div class="card">
        <h3>Customers</h3>
        <p>93</p>
      </div>
    </section>

    <section class="orders">
      <h2>Recent Orders</h2>
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Item</th>
            <th>Quantity</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1021</td>
            <td>Ani</td>
            <td>Strawberry Cake</td>
            <td>2</td>
            <td><span class="status completed">Completed</span></td>
          </tr>
          <tr>
            <td>#1022</td>
            <td>Budi</td>
            <td>Matcha Delight</td>
            <td>1</td>
            <td><span class="status pending">Pending</span></td>
          </tr>
          <tr>
            <td>#1023</td>
            <td>Citra</td>
            <td>Chocolate Tart</td>
            <td>3</td>
            <td><span class="status cancelled">Cancelled</span></td>
          </tr>
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>
