
<section class="content">
    <div id="kalender"></div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    let calendarEl = document.getElementById('kalender');
    let calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events: 'fetch-events.php' // PHP file that returns JSON events
    });
    calendar.render();
  });
</script>
