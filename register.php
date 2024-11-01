<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssPHP/style.css">
    <title>Register</title>
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
                <a href="index.php">
                    <div class="box-trying js-login-btn">ĐĂNG NHẬP</div>
                </a>
            </div>
        </div>

    </header>
    <div class="content-container">
        <div class="content">
            <img src="../imgPHP/Register_background.jpg" alt="" class="background">
            <div class="register-container">
                <div class="register-left">
                    <div class="left-top">
                        <h1>TRẢI NGHIỆM TẬP MIỄN PHÍ</h1>
                    </div>
                    <div class="left-bot">
                        <span> Hãy để lại thông tin và chúng tôi sẽ liên hệ bạn trong vòng 24h! (Khi phát sinh thanh
                            toán,
                            vui lòng chỉ thanh toán cho công ty Spring Fitness & Yoga, không giao dịch hay chuyển
                            khoản
                            vào tài khoản không phải của Công ty Spring)</span>
                    </div>
                </div>
                <div class="register-right">
                    <form action="reg.php" class="form-register " method="post">
                        <div class="element">
                            <input name="name" type="text" placeholder="User name" class="input-register">
                        </div>
                        <div class="element">
                            <input name="password" type="password" placeholder="Password" class="input-register">
                        </div>
                        <div class="element">
                            <input name="email" type="email" placeholder="Email" class="input-register">
                        </div>
                        <div class="button-register">
                            <button type="submit" name="btn-reg">ĐĂNG KÝ</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</body>

</html>