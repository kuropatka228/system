<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentHub</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.emailjs.com/sdk/2.3.2/email.min.js"></script>
</head>
<body>
    <div class="col">
        <div class="container">
            <header>
                <div class="logo">
                    <img src="./image/logo.png" alt="Логотип">
                </div>
                <div class="button-office">
                    <h1><a href="#forWhom">Для кого</a></h1>
                    <h1><a href="#opportunities">Возможности</a></h1>
                    <h1><a href="#settings">Настройка</a></h1>
                    <button class="button">
                        <h1><a href="./cabinet/cabinet.html">Кабинет</a></h1>
                    </button>
                </div>

            </header>

            <div class="text-overlay">
                <h2>Управление арендной недвижимостью: квартиры, апартаменты и гостевые дома</h2>
            
                <button class="button">
                    <h1>Войти</h1>
                </button>
            </div>
    </div>
    <div class="back">
        <div class="second">
            <h2 id="forWhom" class="section">Подойдет</h2>
            <div class="block">
                <div class="item">
                    <span class="checkmark"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 51C28.8487 51 32.1646 50.3404 35.2584 49.0589C38.3522 47.7774 41.1633 45.8991 43.5312 43.5312C45.8991 41.1633 47.7774 38.3522 49.0589 35.2584C50.3404 32.1646 51 28.8487 51 25.5C51 22.1513 50.3404 18.8354 49.0589 15.7416C47.7774 12.6478 45.8991 9.83667 43.5312 7.46878C41.1633 5.10088 38.3522 3.22257 35.2584 1.94107C32.1646 0.659577 28.8487 -4.98996e-08 25.5 0C18.737 1.00777e-07 12.251 2.6866 7.46878 7.46878C2.6866 12.251 0 18.737 0 25.5C0 32.263 2.6866 38.749 7.46878 43.5312C12.251 48.3134 18.737 51 25.5 51ZM24.8427 35.8133L39.0093 18.8133L34.6573 15.1867L22.474 29.8038L16.1698 23.4968L12.1635 27.5032L20.6635 36.0032L22.8565 38.1962L24.8427 35.8133Z" fill="#30C7F7"/>
                        </svg>
                        </span> Агенству недвижимости
                </div>
                <div class="item">
                    <span class="checkmark"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 51C28.8487 51 32.1646 50.3404 35.2584 49.0589C38.3522 47.7774 41.1633 45.8991 43.5312 43.5312C45.8991 41.1633 47.7774 38.3522 49.0589 35.2584C50.3404 32.1646 51 28.8487 51 25.5C51 22.1513 50.3404 18.8354 49.0589 15.7416C47.7774 12.6478 45.8991 9.83667 43.5312 7.46878C41.1633 5.10088 38.3522 3.22257 35.2584 1.94107C32.1646 0.659577 28.8487 -4.98996e-08 25.5 0C18.737 1.00777e-07 12.251 2.6866 7.46878 7.46878C2.6866 12.251 0 18.737 0 25.5C0 32.263 2.6866 38.749 7.46878 43.5312C12.251 48.3134 18.737 51 25.5 51ZM24.8427 35.8133L39.0093 18.8133L34.6573 15.1867L22.474 29.8038L16.1698 23.4968L12.1635 27.5032L20.6635 36.0032L22.8565 38.1962L24.8427 35.8133Z" fill="#30C7F7"/>
                        </svg>
                        </span> Отделу по продаже новостроек
                </div>
                <div class="item">
                    <span class="checkmark"><svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 51C28.8487 51 32.1646 50.3404 35.2584 49.0589C38.3522 47.7774 41.1633 45.8991 43.5312 43.5312C45.8991 41.1633 47.7774 38.3522 49.0589 35.2584C50.3404 32.1646 51 28.8487 51 25.5C51 22.1513 50.3404 18.8354 49.0589 15.7416C47.7774 12.6478 45.8991 9.83667 43.5312 7.46878C41.1633 5.10088 38.3522 3.22257 35.2584 1.94107C32.1646 0.659577 28.8487 -4.98996e-08 25.5 0C18.737 1.00777e-07 12.251 2.6866 7.46878 7.46878C2.6866 12.251 0 18.737 0 25.5C0 32.263 2.6866 38.749 7.46878 43.5312C12.251 48.3134 18.737 51 25.5 51ZM24.8427 35.8133L39.0093 18.8133L34.6573 15.1867L22.474 29.8038L16.1698 23.4968L12.1635 27.5032L20.6635 36.0032L22.8565 38.1962L24.8427 35.8133Z" fill="#30C7F7"/>
                        </svg>
                        </span> Частным агентам
                </div>
            </div>
        </div>
        <div class="list">
            <h2 id="opportunities" class="section">Возможности</h2>
            <div class="item-list-general">
                <div class="item-list">
                    <div class="name-item">Единая база недвижимости</div>
                    <ul>
                        
                        <li>
                            Легко создавайте базу объектов и управляйте каталогом
                        </li>
                        <li>

                            Информация о каждом объекте хранится в отдельной карточке                        </li>
                        <li>
                            Гибко настраивайте права доступа к объектам
                        </li>
                    </ul>
                </div>
                <div class="item-list">
                    <div class="name-item">Автоматизация и экономия</div>
                    <ul>
                        
                        <li>
                            Уведомления напомнят позвонить клиенту, а задачи подскажут, что важно сделать
                        </li>
                        <li>

                            Агент легко найдет информацию для работы со сделкой                     
                         </li>
                    </ul>
                </div>
                <div class="item-list">
                    <div class="name-item">Автоматизация и экономия</div>
                    <ul>
                        <li>
                            Агенты видят всю информацию о клиентах, объектах и своих звонках
                        </li>
                        <li>
                            Менеджер больше не забудет позвонить клиенту или отправить документы                     
                         </li>
                         <li>
                            Ни один контакт не потеряется
                         </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="setting">
        <h2 id="settings" class="section">Легкая настройка</h2>
        
        <h1>Расскажите о целях и задачах проекта нашим партнерам, <br>они подберут для вас идеальное решение по самой низкой стоимости</h1>
        <div class="item-setting-general">
            <div class="item-setting">
                <img src="./image/setting 1.png">
                <h1>Подайте заявку на настройку для вашего бизнеса </h1>
            </div>
            <div class="item-setting">
                <img src="./image/setting 3.png">
                <h1>В короткие сроки получите предложения от наших партнеров</h1>
            </div>
            <div class="item-setting3">
                <img src="./image/setting 2.png">
                <h1>Выберите компанию-разработчика, условия которой вам подходят</h1>
            </div>
        </div>
    </div>
    <div class="back-blue">
        <div class="form-container">
            <div class="center">
                <h3>Заявка на консультацию по внедрению <span class="highlight">RentHub</span> в сфере недвижимости</h3>
            </div>
            <form id="contact-form" method="post">
                <div class="form-group">
                    <input type="text" id="first-name" name="first-name" placeholder="Имя" required>
                </div>
                <div class="form-group">
                    <input type="text" id="last-name" name="last-name" placeholder="Фамилия" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Телефон" required>
                </div>
                <div class="form-group">
                    <input type="text" id="city" name="city" placeholder="Город" required>
                </div>
                <div class="form-group">
                    <textarea id="question" name="question" rows="4" placeholder="Ваш вопрос" required></textarea>
                </div>
                <button class="button-submit" type="submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-item">
            <div class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.2833 10.1625L23.2178 0H21.1004L13.3429 8.82375L7.14665 0H0L9.36983 13.3433L0 24H2.1174L10.3099 14.6818L16.8533 24H24L14.2828 10.1625H14.2833ZM11.3834 13.4606L10.4339 12.132L2.88024 1.55962H6.13241L12.228 10.092L13.1773 11.4206L21.1014 22.5112H17.8496L11.3834 13.4612V13.4606Z" fill="white"/>
                </svg>
                <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 2.82353C28.8958 3.31765 27.7055 3.64235 26.4723 3.79765C27.7342 3.04941 28.7094 1.86353 29.1683 0.437647C27.978 1.14353 26.6587 1.63765 25.2677 1.92C24.1348 0.705883 22.543 0 20.7361 0C17.3662 0 14.6128 2.71059 14.6128 6.05647C14.6128 6.53647 14.6702 7.00235 14.7706 7.44C9.66539 7.18588 5.1195 4.77176 2.09369 1.11529C1.5631 2.00471 1.26195 3.04941 1.26195 4.15059C1.26195 6.25412 2.33748 8.11765 4.00096 9.17647C2.98279 9.17647 2.03633 8.89412 1.20459 8.47059V8.51294C1.20459 11.4494 3.32696 13.9059 6.13767 14.4565C5.23543 14.7006 4.28782 14.7345 3.36998 14.5553C3.75947 15.7588 4.52228 16.8119 5.55117 17.5665C6.58006 18.3211 7.8233 18.7393 9.10612 18.7624C6.93165 20.4572 4.23615 21.3733 1.46272 21.36C0.975143 21.36 0.487572 21.3318 0 21.2753C2.72467 22.9976 5.96558 24 9.43595 24C20.7361 24 26.9455 14.7671 26.9455 6.76235C26.9455 6.49412 26.9455 6.24 26.9312 5.97176C28.1358 5.12471 29.1683 4.05176 30 2.82353Z" fill="white"/>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.9995 8.00571C9.78813 8.00571 8.00536 9.80571 8.00536 12C8.00536 14.1943 9.80528 15.9943 11.9995 15.9943C14.1937 15.9943 15.9936 14.1943 15.9936 12C15.9936 9.80571 14.1937 8.00571 11.9995 8.00571ZM23.9989 12C23.9989 10.3371 23.9989 8.70857 23.9132 7.04571C23.8275 5.12571 23.3818 3.41143 21.9762 2.02286C20.5705 0.617143 18.8734 0.171428 16.9535 0.0857142C15.2907 -8.30208e-08 13.6622 0 11.9995 0C10.3367 0 8.70818 -8.30208e-08 7.0454 0.0857142C5.12549 0.171428 3.41128 0.617143 2.02277 2.02286C0.617115 3.42857 0.171421 5.12571 0.0857104 7.04571C-8.3017e-08 8.70857 0 10.3371 0 12C0 13.6629 -8.3017e-08 15.2914 0.0857104 16.9543C0.171421 18.8743 0.617115 20.5886 2.02277 21.9771C3.42842 23.3829 5.12549 23.8286 7.0454 23.9143C8.70818 24 10.3367 24 11.9995 24C13.6622 24 15.2907 24 16.9535 23.9143C18.8734 23.8286 20.5877 23.3829 21.9762 21.9771C23.3818 20.5714 23.8275 18.8743 23.9132 16.9543C24.0161 15.3086 23.9989 13.6629 23.9989 12ZM11.9995 18.1543C8.58819 18.1543 5.84545 15.4114 5.84545 12C5.84545 8.58857 8.58819 5.84571 11.9995 5.84571C15.4107 5.84571 18.1535 8.58857 18.1535 12C18.1535 15.4114 15.4107 18.1543 11.9995 18.1543ZM18.4106 7.02857C17.6221 7.02857 16.9707 6.39429 16.9707 5.58857C16.9707 4.78286 17.6049 4.14857 18.4106 4.14857C19.2163 4.14857 19.8505 4.78286 19.8505 5.58857C19.8549 5.77635 19.8206 5.96301 19.7498 6.137C19.6791 6.31098 19.5733 6.46857 19.4391 6.6C19.3077 6.73418 19.1501 6.83994 18.9762 6.91071C18.8022 6.98149 18.6155 7.01577 18.4277 7.01143L18.4106 7.02857Z" fill="white"/>
                </svg>
                    
                    
                    
            </div>
            <div class="footer-text">
                <h4>Для кого</h4>  
                <h4>Возможности</h4>
                <h4>Настройка</h4>
                <h4>Кабинет</h4>
            </div>
        
    </footer>

    </div>
    <script type="text/javascript">
        (function() {
            emailjs.init("oyoxr_wEbQ7TU87ry"); // Замените YOUR_USER_ID на ваш ID пользователя EmailJS
            window.onload = function() {
                document.getElementById('contact-form').addEventListener('submit', function(event) {
                    event.preventDefault();
                    emailjs.sendForm('service_d5wcprq', 'template_pa2h942', this)
                        .then(function() {
                            alert('Сообщение успешно отправлено!');
                        }, function(error) {
                            alert('Произошла ошибка при отправке сообщения: ' + error.text);
                        });
                });
            };
        })();
    </script>
</body>
</html>