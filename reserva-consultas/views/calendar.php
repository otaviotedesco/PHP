<!-- views/calendar.php -->
<?php
include '../includes/auth.php';
if (!isLoggedIn() || getUserRole() !== 'medico') {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calendário</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <h2>Calendário de Consultas</h2>
    <div id="calendar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: 'events.php',
                eventClick: function(info) {
                    alert('Paciente: ' + info.event.title + '\n' +
                        'Data: ' + info.event.start.toISOString().substring(0, 10) + '\n' +
                        'Horário: ' + info.event.start.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})
                    );
                }
            });
            calendar.render();
        });
    </script>
</body>
</html>
