<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #135589;
            color: white;
            position: fixed;
            padding: 20px;
            left: 0;
            top: 0;
        }
        .sidebar.collapsed {
            width: 60px;
        }
        .content {
            margin-left: 250px;
            padding: 10px;
        }
        .card-custom {
          max-width: 600px;
          margin: 0 auto;
          padding: 30px;
          text-align: center;
          box-shadow: 0 4px 8px rgba(0,0,0,0.1);
          background-color: white;
          border-radius: 8px;

        }
        .btn-primary-custom {
            background-color: #135589;
            border: none;
            padding: 10px 20px;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .back-icon {
            width: 24px;
            height: auto;
            cursor: pointer;
            margin-bottom: 10px
        }
        .nav-link img {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }
        .btn-logout {
            background: white;
            color: black;
            border: none;
            display: flex;
            align-items: center;
        }
        .title-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
          width: 40px; /* Ukuran kecil */
          height: 40px;
          border-radius: 50%;
          margin-right: 8px;
}

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .username {
            font-size: 14px;
            font-weight: bold;
            color: white;
        }
        .toggle-btn {
            position: absolute;
            top: 15px;
            right: -30px;
            background-color: #0d4b79;
            border: none;
            color: white;
            font-size: 20px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 50%;
            transition: 0.3s;
        }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <table class="user-table">
        <tr>
          <td class="avatar-cell">
            <img src="Frame 40792-6.png" alt="User Avatar" class="user-avatar">
          </td>
          <td class="info-cell">
            <span class="username">User</span><br>
            <span class="user-email">user@gmail.com</span>
          </td>
        </tr>
      </table>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link text-white">
            <img src="calendar-checked_icon-icons.webp" alt="Home"
              style="width: 16px; height: 16px; margin-right: 8px;">
            Helperlog</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">
            <img src="search-icon-png-21.png" alt="Search"
              style="width: 16px; height: 16px; margin-right: 8px;">
            Helperfind</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-white">
            <img src="message-icon-transparent-12.jpg" alt="Handshake"
              style="width: 16px; height: 16px; margin-right: 8px;">
            Helperassist</a></li>
      </ul>
      <button class="btn btn-light mt-4">
        <img src="18-512.webp" alt="Logout"
          style="width: 16px; height: 16px; margin-right: 8px;"> Log
        Out</button>
    </div>

    <div class="content">
      <div class="title-container">
        <img src="back.png" alt="Back" class="back-icon"
          onclick="toggleSidebar();">
        <h3>Pengajuan Kontrak</h3>
      </div>

      <div class="content">
        <div class="card card-custom mt-4">
          <img src="Group 8449.png" alt="Success Icon" class="mb-3">
          <h4>Ajukan Kontrak Berhasil Dibuat</h4>
          <p>Ajukan kontrak anda dengan nomor ID #XXXX untuk PRT atas nama YY
            sudah berhasil dibuat dan sedang menunggu proses review oleh admin.
            Silakan mengecek progres ajukan kontrak anda pada laman berikut.</p>
          <button class="btn btn-primary btn-primary-custom">Cek Progress
            Kontrak</button>
        </div>
      </div>
    </body>
  </html>
