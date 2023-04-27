                <?php if(isset($_SESSION['username'])) : ?>
                    <div class="login">
                        <?= $_SESSION['username'] ?>
                        <a href="../pages/access/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                <?php endif ?>