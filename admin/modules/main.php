<?php
                if (isset($_GET['action']) && isset($_GET['query'])) {
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }else {
                    $tam = '';
                    $query = '';
                }
                if($tam == 'danhmuc' && $query =='edit_dm'){
                    include("modules/danhmuc/edit_dm.php");
                }elseif($tam == 'danhmuc' && $query == 'sua_dm'){
                    include("modules/danhmuc/sua_dm.php");
                }elseif($tam == 'danhmuc' && $query == 'them_dm'){
                    include("modules/danhmuc/them_dm.php");
                }elseif($tam == 'giaodien' && $query == 'editgd'){
                    include("modules/giaodien/editgd.php");
                }elseif($tam == 'giaodien' && $query == 'add_bn'){
                    include("modules/giaodien/add_bn.php");
                }elseif($tam == 'giaodien' && $query == 'add_logo'){
                    include("modules/giaodien/add_logo.php");
                }elseif($tam == 'giaodien' && $query == 'edit_bn'){
                    include("modules/giaodien/edit_bn.php");
                }elseif($tam == 'giaodien' && $query == 'edit_lg'){
                    include("modules/giaodien/edit_lg.php");
                }elseif($tam == 'giaodien' && $query == 'sua_bn'){
                    include("modules/giaodien/sua_bn.php");
                }elseif($tam == 'giaodien' && $query == 'sua_lg'){
                    include("modules/giaodien/sua_lg.php");
                }elseif($tam == 'khachhang' && $query == 'edit_kh'){
                    include("modules/khachhang/edit_kh.php");
                }elseif($tam == 'khachhang' && $query == 'them_kh'){
                    include("modules/khachhang/them_kh.php");
                }elseif($tam == 'khachhang' && $query == 'sua_kh'){
                    include("modules/khachhang/sua_kh.php");
                }elseif($tam == 'sanpham' && $query == 'edit'){
                    include("modules/sanpham/edit.php");
                }elseif($tam == 'sanpham' && $query == 'sua_sp'){
                    include("modules/sanpham/sua_sp.php");
                }elseif($tam == 'sanpham' && $query == 'them_sp'){
                    include("modules/sanpham/them_sp.php");
                }elseif ($tam == 'tintuc' && $query == 'edit_tt') {
                    include("modules/tintuc/edit_tt.php");
                }elseif ($tam == 'tintuc' && $query == 'sua_bv') {
                    include("modules/tintuc/sua_bv.php");
                }elseif ($tam == 'tintuc' && $query == 'them_bv') {
                    include("modules/tintuc/them_bv.php");
                }elseif ($tam == 'admin' && $query == 'edit_admin') {
                    include("modules/admin/edit_admin.php");
                }elseif ($tam == 'admin' && $query == 'logout') {
                    include("modules/admin/logout.php");
                }elseif ($tam == 'access' && $query == 'login') {
                    include("pages/access/login.php");
                }else{ 
                    include("modules/admin/admin.php");
                }
                ?>