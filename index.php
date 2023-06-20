




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
          <img src="./assets/images/Gambar Logo P1.png" alt="logo" width="120" height="36">
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
                <a href="index2.php">Meja Restaurant</a>
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
          <!--
            - PRODUCT MINIMAL
          -->
          <div class="product-minimal">
            <div class="product-showcase">
              <h2 class="title">New Arrivals</h2>
              <div class="showcase-wrapper has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1doubleburger.jpg" alt="relaxed short full sleeve t-shirt"
                        width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Double Burger</h4>
                      </a>

                      <a href="#" class="showcase-category">Burger</a>
                      <div class="price-box">
                        <p class="price">Rp39.999</p>
                        <del>Rp50.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1burgerayam.jpg" alt="girls pink embro design top"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Burger Ayam</h4>
                      </a>

                      <a href="#" class="showcase-category">Burger</a>
                      <div class="price-box">
                        <p class="price">Rp20.000</p>
                        <del>Rp30.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1kopisusu.jpeg" alt="black floral wrap midi skirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Kopi Susu</h4>
                      </a>

                      <a href="#" class="showcase-category">Kopi</a>
                      <div class="price-box">
                        <p class="price">Rp15.000</p>
                        <del>Rp25.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1puddingsusu.jpg" alt="pure garment dyed cotton shirt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Pudding susu</h4>
                      </a>

                      <a href="#" class="showcase-category">pudding</a>

                      <div class="price-box">
                        <p class="price">Rp10.000</p>
                        <del>Rp20.000</del>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1mieayam.jpg" alt="men yarn fleece full-zip jacket"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Mie Ayam</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>
                      <div class="price-box">
                        <p class="price">Rp11.000</p>
                        <del>Rp17.000.</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1miegoreng.jpg" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Mie Goreng</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>
                      <div class="price-box">
                        <p class="price">Rp10.000</p>
                        <del>Rp20.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1eskrimcoklat.png" alt="mens winter leathers jackets"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Es Krim Coklat</h4>
                      </a>

                      <a href="#" class="showcase-category">Es Krim</a>
                      <div class="price-box">
                        <p class="price">Rp8.000</p>
                        <del>Rp10.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1pizzapapperoni.jpg" alt="better basics french terry sweatshorts"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Pizza Papperoni</h4>
                      </a>

                      <a href="#" class="showcase-category">Pizza</a>
                      <div class="price-box">
                        <p class="price">Rp200.000</p>
                        <del>Rp250.000</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-showcase">
              <h2 class="title">Top Rated</h2>
              <div class="showcase-wrapper  has-scrollbar">
                <div class="showcase-container">
                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1doubleburgerBB.jpg" alt="pocket watch leather pouch"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Double Burger BB</h4>
                      </a>

                      <a href="#" class="showcase-category">Burger</a>
                      <div class="price-box">
                        <p class="price">Rp39.999</p>
                        <del>Rp50.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1miegoreng.jpg" alt="silver deer heart necklace"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Mie Goreng</h4>
                      </a>

                      <a href="#" class="showcase-category">Mie</a>
                      <div class="price-box">
                        <p class="price">Rp10.000</p>
                        <del>Rp20.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1kopisusu.jpeg" alt="titan 100 ml womens perfume"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Kopi Susu</h4>
                      </a>

                      <a href="#" class="showcase-category">Kopi</a>
                      <div class="price-box">
                        <p class="price">Rp15.000
                        <del>Rp25.000</del>
                      </div>
                    </div>
                  </div>

                  <div class="showcase">
                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/1.sushimix.jpg" alt="men's leather reversible belt"
                        class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">
                      <a href="#">
                        <h4 class="showcase-title">Sushi Mix</h4>
                      </a>

                      <a href="#" class="showcase-category">Sushi</a>
                      <div class="price-box">
                        <p class="price">Rp99.999</p>
                        <del>Rp150.000</del>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!--
            - PRODUCT FEATURED
          -->
          <div class="product-featured">
            <h2 class="title">Deal of the day</h2>
              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/1doublecheeseburger.jpeg" alt="doublecheeseburger"
                      class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Double Cheeseburger</a>
                    </h3>

                    <p class="showcase-desc">
                      Double Cheeseburger yang lezat dan bergizi, dipadukan oleh saus 
                      pilihan menciptakan cita rasa yang pecah di mulut.
                    </p>

                    <div class="price-box">
                      <p class="price">Rp44.999</p>
                      <del>Rp70.000</del>
                    </div>

                    <button class="add-cart-btn">Beli</button>
                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> Terjual: <b>15</b> </p>
                        <p> Tersedia: <b>40</b> </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">
                      <p class="countdown-desc">Batas Promo:</p>
                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!--
            - PRODUCT GRID
          -->
          <div class="product-main">
            <h2 class="title">New Products</h2>
            <div class="product-grid">
              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/products/1pizzakeju.jpeg" alt="Pizza Keju" width="300"
                    class="product-img default">
                  <img src="./assets/images/products/2pizzakeju.jpeg" alt="Pizza Keju" width="300"
                    class="product-img hover">
                  <p class="showcase-badge">15%</p>
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Pizza</a>
                  <h3>
                    <a href="#" class="showcase-title">Pizza Keju</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">Rp85.000</p>
                    <del>$100.000</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/products/1kopialmond.jpeg" alt="Kopi Almond"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/2kopialmond.jpeg" alt="Kopi Almond"
                    class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Kopi</a>
                  <h3>
                    <a href="#" class="showcase-title">Kopi Almond </a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">Rp14.999</p>
                    <del>Rp40.000</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/products/1.1sushiroll.jpeg" alt="Sushi Roll"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/2.2sushiroll.jpeg" alt="Sushi Roll"
                    class="product-img hover" width="300">
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Sushi</a>
                  <h3>
                    <a href="#" class="showcase-title">Sushi Roll</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">Rp50.000</p>
                    <del>Rp100.000</del>
                  </div>
                </div>
              </div>

              <div class="showcase">
                <div class="showcase-banner">
                  <img src="./assets/images/products/1.1tehtarik.jpeg" alt="Teh Tarik"
                    class="product-img default" width="300">
                  <img src="./assets/images/products/2tehtarik.jpeg" alt="Teh Tarik"
                    class="product-img hover" width="300">
                  <p class="showcase-badge angle black">sale</p>
                  <div class="showcase-actions">
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>

                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
                  </div>
                </div>

                <div class="showcase-content">
                  <a href="#" class="showcase-category">Tea</a>
                  <h3>
                    <a href="#" class="showcase-title">Teh Tarik</a>
                  </h3>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">Rp10.000</p>
                    <del>Rp17.000</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>
      <div class="container">
        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->
          <div class="testimonial">
            <h2 class="title">testimonial</h2>
            <div class="testimonial-card">
              <img src="./assets/images/testimoni.png" alt="alan doe" class="testimonial-banner" width="80"
                height="80">
              <p class="testimonial-name">Forlan Di</p>
              <p class="testimonial-title">CEO & Founder Glory Tech</p>
              <img src="./assets/images/Gambar Logo P1.png" alt="quotation" class="quotation-img" width="26">
              <p class="testimonial-desc">
                Ini adalah tempat belanja yang sangat memuaskan 
              </p>
            </div>
          </div>

          <!--
            - CTA
          -->
          <div class="cta-container">
            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">
            <a href="#" class="cta-content">
              <p class="discount">25% Discount</p>
              <h2 class="cta-title">Super Game</h2>
              <p class="cta-text">Starting @ $10</p>
              <button class="cta-btn">Shop now</button>

            </a>
          </div>

          <!--
            - SERVICE
          -->
          <div class="service">
            <h2 class="title">Our Services</h2>
            <div class="service-container">
              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
                </div>
              </a>

              <a href="#" class="service-item">
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

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