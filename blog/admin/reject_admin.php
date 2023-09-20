<?php
require_once('../includes/db.php');

if (isset($_GET['id'])) {
    $adminId = $_GET['id'];

    $deleteQuery = "DELETE FROM admin WHERE id = $adminId";
    $updateResult = mysqli_query($conn, $deleteQuery);

    if (!$updateResult) {
        echo "Error: " . mysqli_error($conn);
    }
}


$query = "SELECT * FROM admin WHERE approved = 0";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Home - PPM Syafi’ur Rohman Jember</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="../includes/img/logow.png" rel="icon">
    <link href="../includes/main.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../includes/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../includes/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../includes/vendor/aos/aos.css" rel="stylesheet">
    <link href="../includes/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../includes/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<style>
/* body {
        background: linear-gradient(to top, #760712, #A50D1C, #EE3245);
        margin: 0;
        font-family: Arial, sans-serif;
        min-height: 100vh;
    } */

a:hover {
    color: #ba2836;
    text-decoration: none;
}

a {
    color: var(--color-primary);
    text-decoration: none;
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
                <a href="https://www.facebook.com/ppmsrjember?_rdc=1&_rdr" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/ppmsr_jember/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/ppmsrjember/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <span class="logo d-flex align-items-center">

                <h1>
                    <a href="index.php" style="color: #fff;"><img src="../includes/img/logow.png" alt="">PPM
                        Syafi’ur Rohman</a>
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center" style="color: #760712;"><b>Unapproved Admins</b></h2>
                <?php if (mysqli_num_rows($result) > 0) { ?>
                <ul class="list-group">
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<li class="list-group-item d-flex justify-content-between align-items-center">
                                  ' . $row['username'] . '
                                  <div>
                                      <a href="approve_admin.php?id=' . $row['id'] . '" class="btn btn-success btn-sm mr-2">Approve</a>
                                      <a href="reject_admin.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Reject</a>
                                  </div>
                              </li>';
                        }
                        ?>
                </ul>
                <?php } else {
                    echo '<div class="text-center"><p>Tidak ada admin yang mendaftar.</p></div>';
                } ?>
            </div>
        </div>
    </div>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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