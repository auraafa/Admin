<?php
// calendar.php
// This file loads the AdminLTE 3 template with FullCalendar integration.

// Start session or any auth here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Calendar - AdminLTE 3</title>
  <!-- AdminLTE 3 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
  <style>
    /* Make calendar fit nicely */
    #calendar {
      max-width: 900px;
      margin: 20px auto;
    }
    /* Responsive for small/mobile screens */
    @media (max-width: 600px) {
      #calendar {
        max-width: 100%;
        margin: 10px;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
          <li class="nav-item">
            <a href="calendar.php" class="nav-link active">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <!-- Add more sidebar items here -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height:600px;">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <h1>Calendar</h1>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div id="calendar"></div>
    </section>
  </div>
  
  <!-- Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 Your Company.</strong>
    All rights reserved.
  </footer>
</div>

<!-- Required Scripts -->
<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- FullCalendar -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 'auto',
      navLinks: true,
      editable: false,
      selectable: false,
      events: 'fetch-events.php', // Fetch events from this PHP API
      
      // Optional event click handler
      eventClick: function(info) {
        alert('Event: ' + info.event.title + '\\nStart: ' + info.event.start.toLocaleString());
      }
    });
    
    calendar.render();
  });
</script>

</body>
</html>
