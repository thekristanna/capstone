<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Remix icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.6.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="/css/about.css" />
    <!-- Favicon -->
    <link rel="icon" href="/img/halukay-favicon.png" type="image/x-icon" />
    <!-- Page Title -->
    <!-- <title>Halukay</title> -->
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="brand">
        <img src="/img/halukay-logo.png" alt="halukay-logo" id="logo">
        <a href="#" id="brand">halukay.com</a>
      </div>
      <div class="navbar">
        <a href="/" id="home">Home</a>
        <a href="#synrgy" class="active" id="about">About</a>
        <a href="/shop" id="shop">Shop</a>
        @include('layouts/search')        
      </div>
      <div><a href="/signup" id="register">Register</a></div>
      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- about -->
    <div class="container">
        <h1>About Us</h1>
        <div class="about">
            <p>
                Welcome to Halukay.com - Where Preloved Becomes Reloved</p>
            <p>
                At Halukay.com, our passion is to connect people through sustainable shopping. We've created a unique marketplace for savvy shoppers looking for affordable treasures and for sellers who wish to give their preloved items a new life.</p>
            <p>
                We're more than just a website; we're a community committed to the joy of rediscovering and rehoming. From chic vintage fashion to timeless home goods, Halukay.com offers a variety of items that cater to every style and need.</p>
            <p>
                Join our mission at Halukay.com to make shopping a sustainable and delightful adventure. Because here, every item has a story waiting to be continued by you.</p>
        </div>
        <h1>Developers</h1>
        <div class="developers">
            
            <div class="kristanna">
                <img src="../img/developers/Kristanna.jpeg" id="kristanna">
                <p class="name">Kristanna Agnes</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/thekristanna"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/thekristanna"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="dante">
                <img src="../img/developers/Dante.jpeg" id="dante">
                <p class="name">Dante Magbuhos</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/djmagbuhos"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/dante-magbuhos-jr-a7baa12b0/"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
            <div class="paul">
                <img src="../img/developers/Paul.jpeg" id="paul">
                <p class="name">Paul Quiachon</p>
                <p class="title">Web Developer</p>
                <div class="icons">
                    <a href="https://github.com/Pquiachon"><i class="ri-github-fill"></i></a>
                    <a href="https://www.linkedin.com/in/john-paul-quiachon-b4727a26a/"><i class="ri-linkedin-box-fill"></i></a>
                </div>
            </div>
        </div>
    </div>

      
    </div>
    <!-- footer -->
    {{-- @include('layouts/footer') --}}
  </body>
</html>
