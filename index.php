<?php

require_once('core/init.php');
require_once('view/header.php');

if( !isset($_SESSION['user']) ) {
    $_SESSION['msg'] = 'anda harus login dulu, untuk mengakses halaman ini';
    header('Location: login.php');
}

?>

<h1>Selamat Datang <?php echo $_SESSION['user']; ?></h1>

<?php if( cek_status($_SESSION['user']) ) : ?>
    <div>Hallo Admin</div>
<?php endif ?>

<?php require_once('view/footer.php') ?>