<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - iRent Phone</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

  <!-- Sidebar Navigasi -->
  <aside class="sidebar">
    <div class="brand">iRent Phone</div>
    <nav>
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="perangkat.php">Data Perangkat</a>
      <a href="pesanan.php">Data Pesanan</a>
      <a href="../public/login.php">Logout</a>
    </nav>
  </aside>

  <!-- Konten Utama -->
  <main class="main-content">
    <div class="header">
      <h2>Dashboard Admin</h2>
      <div id="clock">Memuat waktu...</div>
    </div>

    <!-- Ringkasan Statistik -->
    <div class="stats-grid">
      <div class="stat-card">
        <h3>Total Perangkat</h3>
        <div class="value">24 Unit</div>
      </div>
      <div class="stat-card">
        <h3>Sedang Disewa</h3>
        <div class="value">10 Unit</div>
      </div>
      <div class="stat-card">
        <h3>Tersedia</h3>
        <div class="value">14 Unit</div>
      </div>
      <div class="stat-card">
        <h3>Pesanan Menunggu</h3>
        <div class="value">3 Pesanan</div>
      </div>
    </div>

    <!-- Tabel Pesanan Terbaru -->
    <div class="content-box">
      <h3>Pesanan Terbaru</h3>
      <table>
        <thead>
          <tr>
            <th>ID Pesanan</th>
            <th>Penyewa</th>
            <th>Perangkat</th>
            <th>Durasi</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#ORD-001</td>
            <td>Nila Rahmatika</td>
            <td>iPhone 15 Pro Max</td>
            <td>3 Hari</td>
            <td><span style="color:#eab308;">Menunggu</span></td>
          </tr>
          <tr>
            <td>#ORD-002</td>
            <td>Fityay Jovanka</td>
            <td>Samsung S24 Ultra</td>
            <td>2 Hari</td>
            <td><span style="color:#22c55e;">Disewa</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>

  <script src="../../assets/js/main.js"></script>
</body>
</html>
