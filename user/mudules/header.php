    <nav class="nav-top">
                <ul class="ul1">
                    <li>
                        <a href="../index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?action=user&query=user.php">Thông tin</a>
                    </li>
                </ul>
                <?php if(isset($_SESSION['username'])) : ?>
                    <div class="login">
                        <?= $_SESSION['username'] ?>
                        <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                <?php endif ?>
    </nav>