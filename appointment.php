<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
    <link rel="stylesheet" href="Style/appoint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <h1>LOGO</h1>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="dropdown active">
                    <a href="#">
                        <i class="fas fa-calendar"></i>
                        <span>Appointment</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="appointment.php"><i class="fas fa-list"></i>View Appointments</a>
                        <a href="create_appoint.php"><i class="fas fa-plus"></i>Create Appointment</a>
                    </div>
                </li>
                <li>
                    <a href="announcement.php">
                        <i class="fas fa-info-circle"></i>
                        <span>Announcement</span>
                    </a>
                </li>
                <li>
                    <a href="message.php">
                        <i class="fas fa-envelope"></i>
                        <span>Message</span>
                    </a>
                </li>
                <li>
                    <a href="profilepage.php">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </nav>

    </header>

    <main>
        <div class="appointment-header">
            <h1>APPOINTMENT</h1>
            <div class="sort-dropdown">
                <button class="sort-btn">
                    Sort by
                    <i class="fas fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="?sort=date_asc">Date (Ascending)</a>
                    <a href="?sort=date_desc">Date (Descending)</a>
                    <a href="?sort=name_asc">Name (A-Z)</a>
                    <a href="?sort=name_desc">Name (Z-A)</a>
                </div>
            </div>
        </div>

        <div class="appointment-grid">
            <?php include 'db_conn.php'; ?>
        </div>
    </main>

    <script src="script.js">
        document.addEventListener('DOMContentLoaded', function() {
            // Add click handler for mobile devices
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        const dropdownMenu = this.querySelector('.dropdown-menu');
                        dropdownMenu.style.display =
                            dropdownMenu.style.display === 'block' ? 'none' : 'block';
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>

</html>