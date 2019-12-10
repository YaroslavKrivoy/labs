<?php
session_start();
$url = 'index.php?mod=auth';
$title = 'Authorize';

if ((isset($_SESSION['user']) == true)) {
    $url = $url . '&&opt=logout';
    $title = $_SESSION['user'] . ' - Logout';
}

?>
<header class="main-header">
    <div class="container" style="display: flex; flex-direction: row; justify-content: space-between;">
        <div class="logo">
            <a href="modules/main/index.php"><img src="img/logo.png" alt="logo"></a>
        </div>

        <div class="menu">
            <!-- desktop navbar -->
            <nav class="desktop-nav">
                <ul class="first-level">
                    <li><a href="modules/main/index.php" class="animsition-link">Home</a></li>
                    <li><a href="modules/about/index.php" class="animsition-link">about us</a></li>
                    <li><a href="modules/services/index.php" class="animsition-link">services</a></li>
                    <li><a href="">portfolio</a>
                        <ul class="second-level">
                            <li><a href="#" class="animsition-link">portfolio list</a></li>
                            <li><a href="#" class="animsition-link">single project 1</a></li>
                            <li><a href="#" class="animsition-link">single project 2</a></li>
                        </ul>
                    </li>
                    <li><a href="">blog</a>
                        <ul class="second-level">
                            <li><a href="modules/blog/index.php" class="animsition-link">posts list</a></li>
                            <li><a href="#" class="animsition-link">single post</a></li>
                        </ul>
                    </li>
                    <li><a href="modules/contact/index.php" class="animsition-link">contact us</a></li>
                </ul>
            </nav>
            <!-- mobile navbar -->
            <nav class="mobile-nav"></nav>
            <div class="menu-icon">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div class="auth" style="line-height: 100px;">
            <button class="btn green"><a href="<?php echo $url?>"><?php echo $title?></a></button>
        </div>
    </div>

</header>
