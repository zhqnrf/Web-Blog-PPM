<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Komentar - PPM Syafi'ur Rohman Jember</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../includes/img/logow.png" rel="icon">
    <link href="../includes/main.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../includes/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../includes/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../includes/vendor/aos/aos.css" rel="stylesheet">
    <link href="../includes/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../includes/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<style>
    a:hover {
        color: #ba2836;
        text-decoration: none;
    }

    a {
        color: var(--color-primary);
        text-decoration: none;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: end;

        margin-bottom: 20px;
        text-align: center;
        /* Center text within form */
    }



    label {
        margin-right: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        padding: 8px;

        border: 1px solid #ccc;
        width: 350px;
        height: 37px;
        border-radius: 4px;
    }

    input[type="submit"] {
        padding: 8px 12px;
        background-color: #760712;
        color: #fff;
        height: 37px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #A50D1C;
    }


    /* Comment Styles */
    .comment {
        /* border: 1px solid #ccc; */
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 30px;
        margin-right: 30px;
    }



    .comment-heading {
        text-align: center;
        color: #760712;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .comment .info span {
        font-weight: bold;
        margin-right: 5px;
    }

    .delete-button {
        background-color: #ff3333;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 4px;
    }

    .delete-button:hover {
        background-color: #ff6666;
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:ppmsrjember@gmail.com">ppmsrjember@gmail.com</a>
                </i>
                <span style="margin-right: 10px;"></span>
                <!-- Ini adalah elemen <span> dengan gaya CSS untuk memberikan spasi -->
                <i class="bi bi-phone d-flex align-items-center">
                    <a href="https://api.whatsapp.com/send?phone=6282229517549">082229517549</a>
                </i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://twitter.com/ppmsr_jember" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/ppmsrjember?_rdc=1&_rdr" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/ppmsr_jember/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/ppmsrjember/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <span class="logo d-flex align-items-center">

                <h1>
                    <a href="index.php" style="color: #fff;"><img src="../includes/img/logow.png" alt="">PPM
                        Syafi'ur Rohman</a>
                </h1>
            </span>
            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li><a href="/ppm">Home</a></li> -->
                    <li><a href="index.php">Berita</a></li>
                    <li><a href="/ppm/blog/admin/delete_comment.php">Komentar</a></li>
                    <li><a href="/ppm/blog/admin/reject_admin.php">Admin</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <h1 class="text-center comment-heading" style="color: #760712; padding-top: 30px;"><b style="font-size: 30px;">Management Comments</b></h1>

    <!-- Formulir Pencarian -->

    <form action="" method="post" style="justify-content: center;">

        <input type="text" id="search" name="search">
        <input type="submit" value="Cari">
    </form>


    <?php
    // Hubungkan ke database
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = '127_zhaqian';

    $conn = new mysqli($server, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Jika ada penghapusan, lakukan penghapusan
    if (isset($_POST["delete_comment"])) {
        $comment_id = $_POST["comment_id"];
        $comment_id = mysqli_real_escape_string($conn, $comment_id);

        $sql_delete = "DELETE FROM comments WHERE id = '$comment_id'";

        if ($conn->query($sql_delete) === TRUE) {
            $response = "success";
        } else {
            $response = "error";
            $error_message = $conn->error;
        }
    }

    // Query untuk mengambil semua komentar
    $sql = "SELECT * FROM comments";

    // Jika ada pencarian, tambahkan kondisi WHERE
    if (isset($_POST["search"]) && !empty($_POST["search"])) {
        $search = $_POST["search"];
        $search = mysqli_real_escape_string($conn, $search);
        $sql .= " WHERE comment LIKE '%$search%' OR name LIKE '%$search%'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tampilkan komentar
        while ($row = $result->fetch_assoc()) {
            echo "<div class='comment'>";
            echo "<p  style='font-weight: bold;><span'></span> {$row['name']} - <span style='font-weight: 400;'></span> {$row['email']}</p>";
            echo "<p><span style='font-weight: 400;'>Komentar:</span> {$row['comment']}</p>";
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='comment_id' value='{$row['id']}'>";
            echo "<input type='submit' name='delete_comment' value='Hapus Komentar'>";
            echo "</form>";
            echo "</div>";
        }
    } else {
        echo "Tidak ada komentar yang ditemukan.";
    }

    // Tutup koneksi
    $conn->close();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        <?php if (isset($response) && $response == "success") : ?>
            Swal.fire({
                icon: 'success',
                title: 'Komentar berhasil dihapus',
                showConfirmButton: false,
                timer: 1500
            });
        <?php elseif (isset($response) && $response == "error") : ?>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "<?php echo $error_message; ?>"
            });

        <?php endif; ?>
    </script>
    <!-- End Comments Section -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../includes/vendor/aos/aos.js"></script>
    <script src="../includes/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../includes/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../includes/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../includes/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../includes/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../includes/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>