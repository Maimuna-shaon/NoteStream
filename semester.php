<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester Resources</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Inline CSS for custom styles */
        body {
            background-color: #f8f8ff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: #78ccca;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .semester-item:hover {
            background-color: #78ccca;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Semester Resources</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">login</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                
            </ul>
            <div class="nav-btns">
      <a href="user/signin.php" class="btn btn-outline-info">Login</a>
      <a href="user/signup.php" class="btn btn-outline-info">Sign Up</a>
    </div>
        </div>
    </nav>

    <div class="container mt-5 content">
        <h1 class="text-center">Department of CSE</h1>
        <div class="list-group mt-4" style="color:#78ccca">
            <?php for($i = 1; $i <= 8; $i++): ?>
                <a href="notes.php" class="list-group-item list-group-item-action semester-item" onclick="fetchResources(<?php echo $i; ?>)">
                    Semester <?php echo $i; ?>
                </a>
            <?php endfor; ?>
        </div>
        <div class="mt-4" id="resourceContainer"></div>
    </div>

    <!-- Modal for displaying resources -->
    <div class="modal fade" id="resourceModal" tabindex="-1" aria-labelledby="resourceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resourceModalLabel">Resources</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBodyContent">
                    <!-- Resources will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span>&copy; 2024 Notestream. All rights reserved.</span>
            <br>
            <span>Follow us on 
                <a href="#">Facebook</a>, 
                <a href="#">Twitter</a>, 
                <a href="#">Instagram</a>
            </span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function fetchResources(semester) {
            $.ajax({
                url: '',
                type: 'GET',
                data: { semester: semester },
                success: function(response) {
                    $('#modalBodyContent').html(response);
                    $('#resourceModal').modal('show');
                },
                error: function() {
                    $('#modalBodyContent').html('<p class="text-danger">An error occurred while fetching the resources.</p>');
                    $('#resourceModal').modal('show');
                }
            });
        }
    </script>
</body>
</html>

<?php
if (isset($_GET['semester'])) {
    $resources = [
        1 => ['Resource 1.1', 'Resource 1.2', 'Resource 1.3'],
        2 => ['Resource 2.1', 'Resource 2.2', 'Resource 2.3'],
        3 => ['Resource 3.1', 'Resource 3.2', 'Resource 3.3'],
        4 => ['Resource 4.1', 'Resource 4.2', 'Resource 4.3'],
        5 => ['Resource 5.1', 'Resource 5.2', 'Resource 5.3'],
        6 => ['Resource 6.1', 'Resource 6.2', 'Resource 6.3'],
        7 => ['Resource 7.1', 'Resource 7.2', 'Resource 7.3'],
        8 => ['Resource 8.1', 'Resource 8.2', 'Resource 8.3'],
    ];

    $semester = (int)$_GET['semester'];
    if (isset($resources[$semester])) {
        echo '<ul class="list-group">';
        foreach ($resources[$semester] as $resource) {
            echo '<li class="list-group-item">' . htmlspecialchars($resource) . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p class="text-danger">Invalid semester selected.</p>';
    }
    exit;
}
?>
