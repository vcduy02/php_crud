<?php 
    //Logo
    $sql = "SELECT * FROM logo";
    $logo = getData($sql);

    //Banner
    $sql = "SELECT * FROM banner";
    $banner = getData($sql);
?>
<header>
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="index.php">
                        <?php foreach ($logo as $lg) : ?>
                            <img src="./img/<?= $lg['img_logo'] ?>" class="img1" alt="">
                        <?php endforeach ?>
                    </a>
                </div>
                <div class="find-login">
                    <i class="fas fa-search"></i>
                    <input type="search">
                    <?php 
                        ob_start();
                        if (isset($_SESSION['hoten']) && isset($_SESSION['id'])) { ?>
                            <div class="user">
                                <a class="in-user" href="./pages/access/users.php?id=<?= $_SESSION['id'] ?>"><?= $_SESSION['hoten'] ?></a>
                                <a href="./pages/access/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                            </div>
                    <?php } else { ?>
                        <a href="?action=access&query=login"><i class="fas fa-user"></i></a>
                    <?php }; ?>
                    <a href="" class="shop">
                        <div class="number">0</div>
                        <i class="fas fa-shopping-cart"></i>
                    </a> 
                </div>
            </div>
        </div>
        <nav class="nav-top">
            <div class="container">
                <ul class="ul1">
                    <li><a href="index.php"><img src="./img/Nvidia-Emblem.png" alt=""></a></li>
                    <li>
                        <a href="">GTX 10 SERIES</a>
                        <span><i class="fas fa-caret-down"></i></span>
                        <div class="submenu">
                            <ul>
                                <li><a href="">GTX 1030</a></li>
                                <li><a href="">GTX 1050</a></li>
                                <li><a href="">GTX 1050 TI</a></li>
                                <li><a href="">GTX 1060 3 GB</a></li>
                                <li><a href="">GTX 1060 6 GB</a></li>
                                <li><a href="">GTX 1070</a></li>
                                <li><a href="">GTX 1070 TI</a></li>
                                <li><a href="">GTX 1080</a></li>
                                <li><a href="">GTX 1080 TI</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">GTX 16 SERIES</a>
                        <span><i class="fas fa-caret-down"></i></span>
                        <div class="submenu">
                            <ul>
                                <li><a href="">GTX 1650</a></li>
                                <li><a href="">GTX 1650 SUPER</a></li>
                                <li><a href="">GTX 1660</a></li>
                                <li><a href="">GTX 1660 SUPER</a></li>
                                <li><a href="">GTX 1660 TI</a></li>                       
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">RTX 20 SERIES</a>
                        <span><i class="fas fa-caret-down"></i></span>
                        <div class="submenu">
                            <ul>
                                <li><a href="">RTX 2060</a></li>
                                <li><a href="">RTX 2060 SUPER</a></li>
                                <li><a href="">RTX 2070</a></li>
                                <li><a href="">RTX 2070 SUPER</a></li>
                                <li><a href="">RTX 2080</a></li>
                                <li><a href="">RTX 2080 SUPER</a></li>
                                <li><a href="">RTX 2080 TI</a></li>                                               
                            </ul>
                        </div>                      
                    </li>
                    <li>
                        <a href="./30series.php">RTX 30 SERIES</a>
                        <span><i class="fas fa-caret-down"></i></span>
                        <div class="submenu">
                            <ul>
                                <li><a href="">RTX 3050</a></li>
                                <li><a href="">RTX 3060</a></li>
                                <li><a href="">RTX 3060 TI</a></li>
                                <li><a href="">RTX 3070</a></li>
                                <li><a href="">RTX 3070 TI</a></li>
                                <li><a href="">RTX 3080</a></li>
                                <li><a href="">RTX 3080 TI</a></li>    
                                <li><a href="./rtx3090.php">RTX 3090</a></li>                          
                            </ul>
                        </div>
                    </li>
                    <li><a href="?action=main&query=tintuc">TIN TỨC</a></li>
                    <li>
                        <a href="">HỖ TRỢ</a>
                        <span><i class="fas fa-caret-down"></i></span>
                        <div class="submenu">
                            <ul>
                                <li><a href="">Tra cứu hóa đơn điện tử</a></li>
                                <li><a href="">Tra cứu bảo hành</a></li>
                                <li><a href="">Gửi yêu cầu bảo hành</a></li>
                                <li><a href="">Góp ý khiếu nại</a></li>                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="nav-end">
            <div class="container">
                <div class="header-end">                  
                    <a href="">
                        <i class="fas fa-gift"></i>
                        <p>KHUYẾN MÃI</p>  
                    </a>
                    <a href="">
                        <i class="fas fa-globe"></i>
                        <p>HƯỚNG DẪN MUA ONLINE</p>  
                    </a>
                    <a href="">
                        <i class="fas fa-money-bill"></i>
                        <p>HƯỚNG DẪN THANH TOÁN</p>                         
                    </a>
                    <a href="">
                        <i class="fas fa-hand-holding-usd"></i>
                        <p>HƯỚNG DẪN TRẢ GÓP</p>                          
                    </a>
                    <a href="">
                        <i class="fas fa-shipping-fast"></i>
                        <p>CHÍNH SÁCH VẬN CHUYỂN</p>                            
                    </a>                   
                </div>
            </div>
        </nav>
    </header>