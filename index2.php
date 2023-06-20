<?php
$host = "localhost"; // Ganti dengan host Anda
$username = "root"; // Ganti dengan username basis data Anda
$password = ""; // Ganti dengan password basis data Anda
$database = "deliver"; // Ganti dengan nama basis data Anda

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id_meja = $_POST['id_meja'];
  $nomor_meja = $_POST['nomor_meja'];
  $status_meja = $_POST['status_meja'];

  $query = "INSERT INTO meja (id_meja, Nomor_meja, status_meja) VALUES ('$id_meja', '$nomor_meja', '$status_meja')";

  if (mysqli_query($conn, $query)) {
    echo "<h1>Reservasi Berhasil</h1>";
    echo "<p>ID Meja: " . mysqli_insert_id($conn) . "</p>";
    echo "<p>Nomor Meja: " . $nomor_meja . "</p>";
    echo "<p>Status Meja: " . $status_meja . "</p>";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arca.co</title>
  <!--  
        fav icon
    -->
  <link rel="shortcut icon" href="./assets/images/Gambar Logo P1.png" type="image/x-icon">
  <!-- 
        css link
     -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="overlay" data-overlay></div>
  <!--
    - MODAL
  -->
  <div class="modal" data-modal>
    <div class="modal-close-overlay" data-modal-overlay></div>
    <div class="modal-content">
      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/gratisongkir.jpg" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">
        <form action="#">
          <div class="newsletter-header">
            <h3 class="newsletter-title">Log-In</h3>
            <p class="newsletter-desc">
              Masuk ke <b>Arca.co</b> untuk mendapatkan gratis ongkir
            </p>
          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>
          <button type="submit" class="btn-newsletter">Log-In</button>

        </form>
      </div>
    </div>
  </div>

  <!--
    - NOTIFICATION TOAST
  -->
  <div class="notification-toast" data-toast>
    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/1miebakso.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">
      <p class="toast-message">
        Seseorang Membeli makanan
      </p>

      <p class="toast-title">
           Mie Bakso
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Menit</time> yang lalu
      </p>
    </div>
  </div>

  <!--
    - HEADER
  -->
  <header>
    <div class="header-top">
      <div class="container">
        <ul class="header-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>

        <div class="header-alert-news">
          <p>
            <b>Gratis Ongkir 3x</b><br>
                7.7 Flash Sale
          </p>
        </div>

        <div class="header-top-actions">
          <select name="currency">
            <option value="idr">IDR Rp</option>
            <option value="usd">USD &dollar;</option>
          </select>

          <select name="language">
            <option value="en-US">Indonesia</option>
            <option value="es-ES">English</option>
            <option value="fr">Prancis</option>
          </select>
        </div>
      </div>
    </div>

    <div class="header-main">
      <div class="container">
        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
        </a>

        <div class="header-search-container">
          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">
          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>

        <div class="header-user-actions">
          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>
        </div>
      </div>
    </div>

    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="#" class="menu-title">Halaman Utama</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Kategori</a>
            <div class="dropdown-panel">
              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Burger</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Double Burger</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Cheese Burger</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Burger Ayam</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Burger Sapi</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                  </a>
                </li>
              </ul>

              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Mie</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mie Ayam</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mie Goreng</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mie Cumi</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Mie Bakso</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                  </a>
                </li>
              </ul>

              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Tea</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Thai Tea</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Es Teh</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Teh Hangat</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Teh Rasa</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                  </a>
                </li>
              </ul>

              <ul class="dropdown-panel-list">
                <li class="menu-title">
                  <a href="#">Kopi</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Kopi Susu</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Kopi Latte</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Kopi Hitam</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">Kopi Almond</a>
                </li>

                <li class="panel-list-item">
                  <a href="#">
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Makanan</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="#">Burger</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pastel</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Mie</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pizza</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Minuman</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Teh</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Kopi</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Susu</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Jus Buah</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Penutup</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Kue</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Es Krim</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pudding</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Reservasi</a>
            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Meja Restaurant</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Meja Couple</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Meja Restaurant Wisata</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="mobile-bottom-navigation">
      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>
        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>
      <button class="sidebar-close-btn" data-mobile-menu-close-btn>

      </button>
    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>
      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>
        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">
        <li class="menu-category">
          <a href="#" class="menu-title">Halaman Utama</a>
        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Burger</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Double Burger</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Cheeseburger</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Burger Ayam</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Burger Sapi</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">
          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Mie</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Mie Ayam</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Mie Cumi</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Mie Goreng</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Mie Bakso</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Pizza</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Pizza Papperoni</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Pizza Keju</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Pizza Hawaii</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Pancake</p>
            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>
            <li class="submenu-category">
              <a href="#" class="submenu-title">Original</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Maple</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Rasa Buah</a>
            </li>
          </ul>
        </li>

        <li class="menu-category">

<button class="accordion-menu" data-accordion-btn>
  <p class="menu-title">Pancake</p>
  <div>
    <ion-icon name="add-outline" class="add-icon"></ion-icon>
    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
  </div>
</button>

<ul class="submenu-category-list" data-accordion>
  <li class="submenu-category">
    <a href="#" class="submenu-title">Original</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Maple</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Rasa Buah</a>
  </li>
</ul>
</li>

<li class="menu-category">

<button class="accordion-menu" data-accordion-btn>
  <p class="menu-title">Pastel</p>
  <div>
    <ion-icon name="add-outline" class="add-icon"></ion-icon>
    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
  </div>
</button>

<ul class="submenu-category-list" data-accordion>
  <li class="submenu-category">
    <a href="#" class="submenu-title">Pastel Sapi</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Sayuran</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Pastel Ayam</a>
  </li>
</ul>
</li>

<li class="menu-category">

<button class="accordion-menu" data-accordion-btn>
  <p class="menu-title">Kopi</p>
  <div>
    <ion-icon name="add-outline" class="add-icon"></ion-icon>
    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
  </div>
</button>

<ul class="submenu-category-list" data-accordion>
  <li class="submenu-category">
    <a href="#" class="submenu-title">Kopi Susu</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Kopi Latte</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Kopi Hitam</a>
  </li>

  <li class="submenu-category">
    <a href="#" class="submenu-title">Kopi Almond</a>
  </li>
</ul>
</li>

      </ul>

      <div class="menu-bottom">
        <ul class="menu-category-list">
          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Bahasa</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">Indonesia</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Prancis</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Mata Uang</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">IDR Rp</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>
            </ul>
          </li>
        </ul>

        <ul class="menu-social-container">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--
    - MAIN
  -->
  <main>
    <!--
      - BANNER
    -->
    <div class="banner">
      <div class="container">
        <div class="slider-container has-scrollbar">
          <div class="slider-item">
            <img src="./assets/images/iBannerBurger.png" alt="hot item" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Terlaris</p>
              <h2 class="banner-title">20.000</h2>
              <a href="#" class="banner-btn"> Beli Sekarang</a>

            </div>
          </div>

          <div class="slider-item">
            <img src="./assets/images/iBannerPizza.png" alt="modern sunglasses" class="banner-img">
            <div class="banner-content">
              <p class="banner-subtitle">Terlaris</p>
              <h2 class="banner-title">Rp50.000,-</h2>
             
              <a href="#" class="banner-btn">Beli Sekarang</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
      - CATEGORY
    -->
    <div class="category">
      <div class="container">
        <div class="category-item-container has-scrollbar">
          <div class="category-item">
            <div class="category-img-box">
              <img src="./assets/images/icons/ihamburger.png" alt="Burger" width="30">
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Burger</h3>
                <p class="category-item-amount">(53)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="./assets/images/icons/ispaguetti.png" alt="Mie" width="30">
            </div>

            <div class="category-content-box">

              <div class="category-content-flex">
                <h3 class="category-item-title">Mie</h3>
                <p class="category-item-amount">(58)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="./assets/images/icons/ipizza.png" alt="Pizza" width="30">
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Pizza</h3>
                <p class="category-item-amount">(68)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>
          </div>

          <div class="category-item">

            <div class="category-img-box">
              <img src="./assets/images/icons/icoffee.png" alt="Coffee" width="30">
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Coffee</h3>
                <p class="category-item-amount">(84)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>
          </div>

          <div class="category-item">
            <div class="category-img-box">
              <img src="./assets/images/icons/idrink.png" alt="Tea" width="30">
            </div>

            <div class="category-content-box">
              <div class="category-content-flex">
                <h3 class="category-item-title">Tea</h3>
                <p class="category-item-amount">(35)</p>
              </div>

              <a href="#" class="category-btn">Show all</a>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
      - PRODUCT
    -->

    <div class="product-container">
      <div class="container">

        <!--
          - SIDEBAR
        -->
        <div class="sidebar  has-scrollbar" data-mobile-menu>
          <div class="sidebar-category">
            <div class="sidebar-top">
              <h2 class="sidebar-title">Kategori</h2>
              <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>
            </div>

            <ul class="sidebar-menu-category-list">
              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ihamburger.png" alt="clothes" width="20" height="20"
                      class="menu-title-img">
                    <p class="menu-title">Burger</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Double Burger</p>
                      <data value="300" class="stock" title="Available Stock">300</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Cheese</p>
                      <data value="60" class="stock" title="Available Stock">60</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Burger Ayam </p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Burger Sapi </p>
                      <data value="87" class="stock" title="Available Stock">87</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ispaguetti.png" alt="footwear" class="menu-title-img" width="20"
                      height="20">
                    <p class="menu-title">Mie</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mie Ayam</p>
                      <data value="45" class="stock" title="Available Stock">45</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mie Goreng</p>
                      <data value="75" class="stock" title="Available Stock">75</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mie Cumi</p>
                      <data value="35" class="stock" title="Available Stock">35</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Mie Bakso</p>
                      <data value="26" class="stock" title="Available Stock">26</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ipizza.png" alt="clothes" class="menu-title-img" width="20"
                      height="20">
                    <p class="menu-title">Pizza</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pizza Papperoni </p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pizza Keju</p>
                      <data value="73" class="stock" title="Available Stock">73</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pizza Hawaii</p>
                      <data value="61" class="stock" title="Available Stock">61</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ipancake.png" alt="perfume" class="menu-title-img" width="20"
                      height="20">
                    <p class="menu-title">Pancake</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Original</p>
                      <data value="12" class="stock" title="Available Stock">12 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Maple</p>
                      <data value="60" class="stock" title="Available Stock">60 pcs</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Rasa Buah</p>
                      <data value="50" class="stock" title="Available Stock">50 pcs</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/ipastel.png" alt="cosmetics" class="menu-title-img" width="20"
                      height="20">
                    <p class="menu-title">Pastel</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pastel Sapi</p>
                      <data value="68" class="stock" title="Available Stock">68</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Sayuran</p>
                      <data value="46" class="stock" title="Available Stock">46</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Pastel Ayam</p>
                      <data value="79" class="stock" title="Available Stock">79</data>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-menu-category">
                <button class="sidebar-accordion-menu" data-accordion-btn>
                  <div class="menu-title-flex">
                    <img src="./assets/images/icons/icoffee.png" alt="glasses" class="menu-title-img" width="20"
                      height="20">
                    <p class="menu-title">Kopi</p>
                  </div>

                  <div>
                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                  </div>
                </button>

                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kopi Susu</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>

                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kopi Latte</p>
                      <data value="48" class="stock" title="Available Stock">48</data>
                    </a>
                  </li>
                  
                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kopi Hitam</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>
                  
                <ul class="sidebar-submenu-category-list" data-accordion>
                  <li class="sidebar-submenu-category">
                    <a href="#" class="sidebar-submenu-title">
                      <p class="product-name">Kopi Almond</p>
                      <data value="50" class="stock" title="Available Stock">50</data>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="product-showcase">
            <h3 class="showcase-heading">Best Seller</h3>
            <div class="showcase-wrapper">
              <div class="showcase-container">
                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1doubleburger.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">Double Burger</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>Rp50.000</del>
                      <p class="price">Rp39.999</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1miegoreng.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">Mie Goreng</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>Rp.20.000</del>
                      <p class="price">Rp10.000</p>
                    </div>
                  </div>
                </div>

                <div class="showcase">
                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1kopisusu.jpeg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">
                    <a href="#">
                      <h4 class="showcase-title">Kopi Susu</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>Rp25.000</del>
                      <p class="price">Rp15.000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-box">
        
  
<h1>Form Reservasi</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <label for="id_meja">ID Meja:</label>
  <input type="text" name="id_meja" id="id_meja" required><br>

  <label for="nomor_meja">Nomor Meja:</label>
  <input type="text" name="nomor_meja" id="nomor_meja" required><br>

  <label for="status_meja">Status Meja:</label>
  <input type="text" name="status_meja" id="status_meja" required><br>

  <input type="submit" value="Reservasi">
</form>
    <!--
    - FOOTER
  -->

    <footer>
      <div class="footer-category">
        <div class="container">
          <h2 class="footer-category-title">Brand directory</h2>
          <div class="footer-category-box">
            <h3 class="category-box-title">Makanan:</h3>
            <a href="#" class="footer-category-link">Burger</a>
            <a href="#" class="footer-category-link">Mie</a>
            <a href="#" class="footer-category-link">Pastel</a>
            <a href="#" class="footer-category-link">Pizza</a>
            <a href="#" class="footer-category-link">Sushi</a>

          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title">Minuman :</h3>
            <a href="#" class="footer-category-link">Teh</a>
            <a href="#" class="footer-category-link">Kopi</a>
            <a href="#" class="footer-category-link">Susu</a>
            <a href="#" class="footer-category-link">Jus Buah</a>
          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title"> Penutup :</h3>
            <a href="#" class="footer-category-link">Es Krim</a>
            <a href="#" class="footer-category-link">Pudding</a>
            <a href="#" class="footer-category-link">Kue</a>
            
          </div>

          <div class="footer-category-box">
            <h3 class="category-box-title">Reservasi :</h3>
            <a href="#" class="footer-category-link">Meja Restaurant</a>
            <a href="#" class="footer-category-link">Meja R</a>
            <a href="#" class="footer-category-link">Facewash</a>
          </div>
        </div>
      </div>

      <div class="footer-nav">
        <div class="container">
          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Services</h2>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Prices drop</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">New products</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Best sales</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Contact us</a>
            </li>

            <li class="footer-nav-item">
              <a href="#" class="footer-nav-link">Sitemap</a>
            </li>
          </ul>

          <ul class="footer-nav-list">

            <li class="footer-nav-item">
              <h2 class="nav-title">Contact</h2>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <address class="content">
                Jakarta, Timur, Jaksel(11)
              </address>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <a href="tel:+607936-8058" class="footer-nav-link">(607) 999-777-001</a>
            </li>

            <li class="footer-nav-item flex">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <a href="mailto:example@gmail.com" class="footer-nav-link">Arca.co@gmail.com</a>
            </li>
          </ul>

          <ul class="footer-nav-list">
            <li class="footer-nav-item">
              <h2 class="nav-title">Follow Us</h2>
            </li>

            <li>
              <ul class="social-link">

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-linkedin"></ion-icon>
                  </a>
                </li>

                <li class="footer-nav-item">
                  <a href="#" class="footer-nav-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <img src="./assets/images/payment.png" alt="payment method" class="payment-img">
          <p class="copyright">
            Copyright &copy; <a href="#">Arca.co</a> all rights reserved.
          </p>
        </div>
      </div>
    </footer>
  </main>

  <!-- 
        js link
     -->
  <script src="./assets/js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>