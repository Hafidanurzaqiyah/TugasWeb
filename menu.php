     <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container ">
      <a class="navbar-brand text-white font-weight-bold" href="#">ShoesStyle</a>
      <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-4 text-white">
          <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white" href="produk.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="contact.php" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="chekout.php">Chekout</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION["pelanggan"])): ?>
            <li class="nav-item"><a class="nav-link text-white" href="riwayat.php">Riwayat</a></li>
             <li><a href="logout.php" class="btn"><img src="img/logout.png" width="30" data-toggel="tooltip" title="Logout"></a></li>
          <?php else: ?>
            <li><a href="login.php" class="btn"><img src="img/account.png" width="30" data-toggel="tooltip" title="Login"></a></li>
            <li><a href="register.php" class="btn"><img src="img/register.png" width="30" data-toggel="tooltip" title="Registrasi"></a></li>
          <?php endif ?>
          
         <li><a href="keranjang.php" class="btn"><img src="img/keranjang.png" width="30" data-toggel="tooltip" title="Keranjang"></a></li>
       </ul>
     </div>
   </div>
 </nav>