<?php
require_once('../includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin Home - PPM Syafi'ur Rohman Jember</title>
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
    <!-- Tambahkan link ke file CSS baru -->
</head>
<style>
    /* style.css */
    /* Gaya dari kode Anda yang pertama di sini */

    a:hover {
        color: #ba2836;
        text-decoration: none;
    }

    a {
        color: var(--color-primary);
        text-decoration: none;
    }

    /* .form-control {
        border-radius: 0;
    }

    .input-group-append .btn {
        border-radius: 0 0.2rem 0.2rem 0;
    } */

    .home-title {
        text-align: center;
        margin-top: 30px;
        font-size: 2em;
    }

    .home-section {
        background-color: #760712;
        border-radius: 10px;
        padding: 20px;
    }

    .card-body {
        text-align: justify;
    }

    .card {
        margin-bottom: 20px;
        border: none;
        transition: transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
    }

    .card-body {
        background-color: #ffffff;
    }

    .card-title {
        font-size: 1.5em;
    }

    .card-text {
        font-size: 1em;
    }

    .read-more {
        color: #760712;
        text-decoration: none;
        cursor: pointer;
    }


    .read-more:hover {
        text-decoration: none;
    }

    .full-text {
        display: none;
    }

    /* Gaya tambahan untuk animasi masuk */
    .card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-body {
        text-align: justify;
    }

    .card-show {
        opacity: 1;
        transform: translateY(0);
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
        /* Tempatkan pagination di tengah */
    }

    .pagination .page-item {
        margin: 0 2px;
    }

    .pagination .page-link {
        color: #fff;
        background-color: #760712;
        border: 1px solid #760712;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .pagination .page-link:hover {
        background-color: #b52d3a;
        border: 1px solid #b52d3a;
    }

    .pagination .page-item.active .page-link {
        background-color: #b52d3a;
        border: 1px solid #b52d3a;
    }

    .pagination .page-item.disabled .page-link {
        color: #aaa;
        background-color: #fff;
        border: 1px solid #ccc;
        cursor: not-allowed;
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

    <!-- Search -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="index.php" method="get" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search activities..." name="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Search -->
    <h1 class="text-center" style="color: #760712;"><b>Admin</b></h1>

    <!-- Home Carousel -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="d-flex justify-content-end mb-3">
                    <a href="add_activity.php" class="btn btn-success">Add Activity</a>
                </div>
                <?php
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $per_page = 5; // Jumlah item per halaman
                $start = ($page - 1) * $per_page;
                $query = "SELECT * FROM konten ORDER BY tanggal DESC";
                $result = mysqli_query($conn, $query);
                $search = isset($_GET['search']) ? $_GET['search'] : '';
                $query = "SELECT * FROM konten WHERE judul LIKE '%$search%' OR deskripsi LIKE '%$search%' ORDER BY tanggal DESC LIMIT $start, $per_page";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card mb-3">
                            <img src="../img/' . $row['foto'] . '" class="card-img-top" alt="Activity Image">
                            <div class="card-body">
                                <h5 class="card-title " style="text-align:start">' . $row['judul'] . '</h5>
                                <p class="card-text" style="text-indent:50px;">' . $row['deskripsi'] . '</p>
                                <p class="card-text"><small class="text-muted">Date: ' . $row['tanggal'] . '</small></p>
                                <a href="edit_activity.php?id=' . $row['id'] . '" class="btn btn-primary">Edit</a>
                                <a href="delete_activity.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a>
                            </div>
                        </div>';
                }
                ?>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        // Hitung jumlah halaman
                        $query = "SELECT COUNT(*) AS total FROM konten WHERE judul LIKE '%$search%' OR deskripsi LIKE '%$search%'";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                        $total_pages = ceil($row['total'] / $per_page);

                        // Tampilkan tombol "Previous"
                        if ($page > 1) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
                        }

                        // Tampilkan nomor halaman
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<li class="page-item ';
                            echo ($page == $i) ? 'active' : '';
                            echo '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }

                        // Tampilkan tombol "Next"
                        if ($page < $total_pages) {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
                        }
                        ?>
                    </ul>
                </nav>


            </div>
        </div>
    </div>
    <!-- End Home Carousel -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cards = document.querySelectorAll(".card");

            setTimeout(function() {
                cards.forEach(function(card) {
                    card.classList.add("card-show");
                });
            }, 300);
        });
    </script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../includes/vendor/aos/aos.js"></script>
    <script src="../includes/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../includes/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../includes/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../includes/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../includes/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../includes/main.js"></script>
</body>

</html>