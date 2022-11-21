<?php
session_start();

require_once("../controller/c_dashboard.php");

if (!isset($_SESSION["login"])) {
    header("Location: ../barang/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>List Data</title>
</head>

<body>

    <!-- sidebar -->
    <div class="sidebar close">

        <!-- logo -->
        <div class="logo-details">
            <img src="../assets/img/logo/administrator.png" alt="Profile">
            <span class="logo_name">Administrator</span>
        </div>

        <!-- navbar menu -->
        <ul class="nav-links">
            <li>

                <!-- menu -->

                <a href="dashboard_rplb_35.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>

                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>
            <li>

                <!-- dropdown -->

                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Menu</a></li>
                    <li><a href="dasboard_listdata_rplb_35.php">List Tabel</a></li>
                    <li><a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_dashboard.php?aksi=detail">Detail Data</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </li>

            <!-- dropdown -->
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">Posts</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Posts</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Menu</a></li>
                </ul>
            </li>
            <li>

                <!-- menu -->

                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="link_name">Analytics</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>
            <li>

                <!-- menu -->

                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-compass'></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li>
            <li>
                <!-- menu -->

                <a href="../models/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- home -->

    <section class="home-section">

        <div class="home-content">

            <!-- menu - sun -->
            <i class='bx bx-menu'></i>
            <i class='bx bxs-sun'><span class="links_side">Switch</span></i>

            <!-- switch toggle -->
            <div class="mode-toggle">
                <span class="switch"></span>
            </div>
            <i class='bx bxs-bell'><span class="links_side">Notify</span></i>
        </div>

        <!-- Tabel Data List -->
        <div class="tabel">

            <!-- Data List -->
            <div class="data-list">
                <div class="content-data">
                    <div class="box-toggle">
                        <h2>Book</h2>
                        <button class="btn">
                            <a href="dasboard_ form_rplb_35.php" class="text-data">Add Data</a>
                        </button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Kode</td>
                                <td>Gambar</td>
                                <td>Judul</td>
                                <td>Penerbit</td>
                                <td>Jenis</td>
                                <td>Actions</td>
                            </tr>
                        </thead>

                        <?php foreach ($data as $row) : ?>

                            <tbody>
                                <tr>
                                    <td><?= $row["barang_kode"]; ?></td>
                                    <td><img src="../assets/img/<?= $row["barang_gambar"]; ?>" alt="Barang" class="book-3d"></td>
                                    <td><?= $row["barang_judul"]; ?></td>
                                    <td><?= $row["barang_penerbit"]; ?> </td>
                                    <td><?= $row["barang_jenis"]; ?> </td>
                                    <td>
                                        <ul>
                                            <li><button class="detail"><a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_dashboard.php?aksi=detail&id=<?= $row["barang_kode"]; ?>">
                                                        <i class='bx bxs-book'></i>Detail
                                                    </a></button></li>
                                            <li><button class="edit"><a href="">
                                                        <i class='bx bx-edit'></i> Edit
                                                    </a></button></li>
                                            <li><button class="hapus"><a href="http://localhost/bew_xirplb_1920_35_Taufik_NurFauzi/controller/c_dashboard.php?aksi=hapus&id=<?= $row["barang_kode"] ?>" onclick=" return confirm('yakin?');">
                                                        <i class='bx bxs-trash'></i> Hapus
                                                    </a></button></li>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                    </table>
                </div>

                <!-- bottom-nav -->
                <div class="bottom-nav">
                    <button><a href="">
                            <i class='bx bx-arrow-back'></i> Back
                        </a></button>
                    <button>1</button>
                    <button><a href="">Next <i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="../assets/js/script.js"></script>
</body>

</html>
