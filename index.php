<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
    <header>
    <nav>
        <div class="burger-menu">
            <span class="burger-bar"></span>
            <span class="burger-bar"></span>
            <span class="burger-bar"></span>
        </div>
        
        <div class="nav-links" id="navMenu">
            <?php
                if (!isset($_SESSION['user'])) {
                    echo "Error";
                } else {
                    ?>
                        <img src="https://cdn2.hubspot.net/hubfs/53/image8-2.jpg" style="width: 62px; height: 32px;" alt="">
                        <ul>
                            <li class="navitems"><a href="#" class="scroll-to-accordion">FAQ</a></li>
                            <li class="navitems"><a href="#" data-modal="modal2" class="openModalBtn">Зв'язок з нами</a></li>
                        </ul>
                        <a class="button" href="#"><?php echo $_SESSION['name'] ?></a>
                    <?php
                }
            ?>
        </div>
    </nav>
</header>


        <!-- Modal для связи с нами -->
        <div id="modal3" class="modal">
            <div class="modal-style">
                <div class="modal-content">
                    <div class="contact">
                        <span class="close-btn">Х</span>
                        <div class="contact__elements">
                            <p>Номер телефону: <span class="contacts">+380*********</span> </p>
                        </div >
                        <div class="contact__elements">
                            <p>Електронна адресса: <span class="contacts">emailAdress@gmail.com</span> </p>
                        </div>
                        <div class="contact__elements">
                            <p>Телеграм: <span class="contacts">@telegram</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="content">
                <div class="content__header">
                    <h2 class="title">Відслідковуй свій прогрес на тренуваннях</h2>
                    <p class="description">GymSchedule тобі в цьому допоможе!</p>
                </div>
                <?php
                    if (!isset($_SESSION['user'])) {
                        ?>
                            <a href="#" class="button openModalBtn" data-modal="modal1">Зареєструватись</a>
                        <?php
                    }
                ?>
            </div>
            <img class="img" src="img/gym.png" alt="">
        </div>

        <!-- Modal для регистрации -->
        <div id="modal1" class="modal">
            <div class="modal-style">
                <div class="modal-content">
                    <span class="close-btn">Х</span>
                    <form method="post" action="app/check_registration.php">
                        <div>
                            <p>Введіть ім'я:</p>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <p>Введіть почту:</p>
                            <input type="email" name="email">    
                        </div>
                        <div>
                            <p>Введіть пароль:</p>
                            <input type="password" name="password">
                        </div>
                        <input type="submit" class="button">
                        <p>Є аккаунт? <a href="#" data-modal="modal2" class="openModalBtn">Авторизуйтесь</a></p>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal для авторизации -->
        <div id="modal2" class="modal">
            <div class="modal-style">
                <div class="modal-content">
                    <span class="close-btn">Х</span>
                    <form method="post" action="app/check_login.php">
                        <div>
                            <p>Введіть почту:</p>
                            <input type="email" name="email">    
                        </div>
                        <div>
                            <p>Введіть пароль:</p>
                            <input type="password" name="password">
                        </div>
                        <input type="submit" class="button">
                    </form>
                </div>
            </div>
        </div>

        <div id="accordion-section" class="accordions">
            <div class="accordion">
                <div class="accordion__header">
                    <h5>Чи є історія моїх прогресів?</h5>
                    <img src="img/icons/icon.svg" alt="" class="icon"> 
                </div>
                <p class="accordion__content">Нажаль, але історія Ваших тренувань поки не зберігається. Але ми працюємо над цим.</p>
            </div>
            <div class="accordion">
                <div class="accordion__header">
                    <h5>Скільки вправ я можу додати?</h5>
                    <img src="img/icons/icon.svg" alt="" class="icon"> 
                </div>
                <p class="accordion__content">Ви можете додати безліч вправ у якусь обрану Вами групу м’язів</p>
            </div>
            <div class="accordion">
                <div class="accordion__header">
                    <h5>Чи є у вас відгуки?</h5>
                    <img src="img/icons/icon.svg" alt="" class="icon"> 
                </div>
                <p class="accordion__content">Так, у нас є відгуки і ви можете там залишити свій відгук</p>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>
