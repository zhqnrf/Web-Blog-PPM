<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <link href="../includes/img/logow.png" rel="icon">
    <link href="../includes/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome -->

</head>
<style>
    body {
        background: linear-gradient(to bottom, #760712, #A90A1A, #E13344);
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .edit-container {
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        padding: 20px;
        animation: slide-in 0.5s ease-out;
    }

    .edit-container h2 {
        color: #0c4b93;
        text-align: center;
        margin-bottom: 20px;
    }

    .edit-container label {
        color: #0c4b93;
    }

    .edit-container .form-control {
        border-color: #0c4b93;
    }

    .edit-container .btn-primary {
        background-color: #0c4b93;
        border-color: #0c4b93;
    }

    .edit-container .btn-primary:hover {
        background-color: #0f93da;
        border-color: #0f93da;
    }

    .edit-container .btn-secondary {
        background-color: #930C0C;
        border-color: #930C0C;
    }

    .edit-container .btn-secondary:hover {
        background-color: #bbb;
        border-color: #bbb;
    }

    @keyframes slide-in {
        0% {
            opacity: 0;
            transform: translateY(-100%);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<body>
    <!-- Navbar -->
    <?php
    require_once('../includes/db.php');

    if (isset($_GET['id'])) {
        $activity_id = $_GET['id'];

        // Fetch activity details
        $query = "SELECT * FROM konten WHERE id = $activity_id";
        $result = mysqli_query($conn, $query);
        $activity = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['update_activity'])) {
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];

        $tanggal = $_POST['tanggal'];

        // Update activity data
        $query = "UPDATE konten SET judul = '$judul', deskripsi = '$deskripsi', tanggal = '$tanggal' WHERE id = $activity_id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '<script>alert("Activity updated successfully."); window.location.href = "index.php";</script>';
        } else {
            echo '<div class="container">
                    <div class="alert alert-danger">Failed to update activity.</div>
                  </div>';
        }
    }
    ?>

    <!-- Edit Activity Form -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="edit-container 
            " style=" width: 100%">
                <h2 class="text-center" style="color: #930C0C;">Edit Activity</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="judul">Title</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $activity['judul']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Description</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?php echo $activity['deskripsi']; ?></textarea> ini juga text area

                    </div>


                    <div class="form-group">
                        <label for="tanggal">Date</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $activity['tanggal']; ?>" required>
                    </div>
                    <div style="display: flex; column-gap: 10px;">
                        <button type="submit" class="btn btn-primary btn-block" name="update_activity">
                            Update Activity
                        </button>
                        <a href="index.php" class="btn btn-secondary btn-block" style="margin-top: 0;">Cancel</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        import Trix from "trix"
        document.addEventListener("trix-before-initialize", () => {})
    </script>
</body>

</html>