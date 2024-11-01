<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssPHP/style.css">
    <link rel="stylesheet" href="../item/themify-icons/themify-icons.css">
    <title>Home</title>
</head>

<body>
    <header id="header-container">
        <div class="header">
            <div class="logo-header">
                <a href="#">
                    <img src="../imgPHP/logo2.webp" alt="" id="logo">
                </a>
            </div>
            <div class="header-menu">
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link">DỊCH VỤ</a>
                        <div class="under-line"></div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link">CÂU LẠC BỘ</a>
                        <div class="under-line"></div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link">LỊCH TẬP/SCHEDULE</a>
                        <div class="under-line"></div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link">HỘI VIÊN</a>
                        <div class="under-line"></div>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link">QUÀ TẶNG</a>
                        <div class="under-line"></div>
                    </li>

                </ul>


            </div>
            <div class="right-header">
                <a href="#">
                    <div class="box-trying js-login-btn">ĐĂNG NHẬP</div>
                </a>
            </div>
        </div>

    </header>
    <div class="content-container">
        <div class="content">
            <img src="../imgPHP/Background.jpg" alt="" class="background">
            <div class="content-infor">
                <span>THỔI BÙNG</span>
                <span>NGỌN LỬA CHIẾN BINH</span>
                <span>CÙNG KICKFIT & MMA</span>
                <div class="box-box">
                    <a href="./register.php">
                        <button id="Register">ĐĂNG KÝ NGAY</button>
                    </a>
                    <a href="#" class="login js-login-btn">Đã có tài khoản?</a>
                </div>

            </div>

        </div>

    </div>
    <!---------------- modal --------------->
    <div class="modal  js-modal ">
        <div class="modal-container js-modal-container">

            <header class="modal-header ">
                <div class="modal-close  js-modal-close">
                    <i class="ti-arrow-left"></i>
                </div>
                <div class="modal-logo">ĐĂNG NHẬP</div>
            </header>
            <div class="modal-body">
                <form action="l-in.php" class="modal-form " method="post">
                    <div class="modal-element">
                        <input name="name" type="text" class="modal-input" placeholder="User name">
                    </div>

                    <div class="modal-element">
                        <input name="password" type="password" class="modal-input" placeholder="Password">
                    </div>

                    <div class="modal-button ">
                        <button type="submit" name="btn-login"> ĐĂNG NHẬP </button>
                    </div>
                </form>

            </div>

            <footer class="modal-footer">
                <div class="footer-help">
                    <a href="http://127.0.0.1:5500/" class="help">Quên mật khẩu?</a>
                </div>
                <div class="or">or</div>
                <div class="modal-register">
                    <a href="./register.php">
                        <button id="mregister">ĐĂNG KÝ </button>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <script src="../js/php.js"></script>
</body>

</html>