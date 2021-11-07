<!DOCTYPE html>
<html lang="ru">
    <head>
        <link href="css/index.css" rel="stylesheet">
        <link href="css/popup_form.css" rel="stylesheet">
        <link href="css/price_form.css" rel="stylesheet">
        <link href="css/question_form.css" rel="stylesheet">
        <link href="css/recall_form.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="description" content="Ремонт цифровой техники в Москве">
        <meta name="keywords" content="ремонт, запчасти, цифровая техника, телефон, планшет, ноутбук, компьютер, ПК, смартфон, IPhone, Mac">
        <title>МУЛЬТИ ремонт цифровой техники</title>
    </head>
    <body>
        <header>
            <div>
                <ul class="hr">
                    <li>
                        <img src="img/logo.svg" height="100em" alt="Логотип">
                    </li>
                    <li>
                        <ul class="contacts">
                            <li>
                               <label class="bigText">График работы:</label> 
                            </li>
                            <li>
                               <label>пн-пт с 9:00 до 19:00</label>  
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul class="contacts">
                            <li>
                                <label class="bigText">Телефон:</label> 
                            </li>
                            <li>
                                <label>+1(111)111-11-11</label>  
                            </li>
                        </ul>                     
                    </li>
                </ul>
                
                
            </div>
            <div>
                <nav>
                    <ul class="menu">
                        <li>
                            <a href="#" title="Вы уже на странице с услугами">
                              Услуги
                            </a>                            
                        </li>
                        <li>
                            <a href="news.php">
                                Новости
                            </a>                            
                        </li>
                        <li>
                            <a href="contacts.html">
                                Контакты
                            </a>                            
                        </li>
                    </ul>
                </nav>
            </div>
            
        </header>
        <main>
            <h2>
                Услуги по ремонту ноутбуков, смартфонов, планшетов, ПК и иной цифровой техники:
            </h2>
            <ul>
                <li>
                    Диагностика
                </li>
                <li>
                    Настройка ПО
                </li>
                <li>
                    Ремонт и замена составляющих
                </li>
                <li>
                    Выезд/доставка на дом
                </li>
            </ul>
            <div>
                <div class="feedback">
                    <h2>
                        <br>
                        Обратная связь
                    </h2>
                </div>
                <div class="buttons">
                    <button onclick='popUpOn("price_form")' type="button">
                        Узнать цену
                    </button>
                    <button onclick='popUpOn("question_form")' type="button">
                        Задать вопрос
                    </button>
                    <button onclick='popUpOn("recall_form")' type="button">
                        Перезвоните мне
                    </button>
                </div>
            </div>
            <br>
            <div id="price_form">
                <div class="popup">                    
                    <button class="close" title="Закрыть" onclick='popUpOff("price_form")'></button>
                    <h2>Заполните поля формы</h2>
                    <form action="calculate_price.php" method="POST">
                         <!--TODO: подвязать к БД, проверить работоспособность -->           
                        <p>
                            <label><b>Тип устройства:</b></label><br>
                            <input type="radio" name="type" value="smartphone">Смартфон<br>
                            <input type="radio" name="type" value="tablet">Планшет<br>
                            <input type="radio" name="type" value="laptop">Ноутбук<br>
                            <input type="radio" name="type" value="PC">ПК<br>
                            <input type="radio" name="type" value="other">Иное<br>
                        </p>                
                        <p>
                            <label><b>Марка (бренд):</b></label><br>
                            <input list="brands" name="brand" placeholder="Начните ввод">
                            <datalist id="brands">
                            <?php 
                            $file = fopen('txt/brends.txt','r');

                            while(!feof($file)){
                                $value = str_replace(["\n","\r"], '', fgets($file));
                                echo '<option value="',$value,'">',$value,'</option>',"\n";
                            }
                            fclose($file);
                            ?>
                                <option value="other">Другое</option>
                            </datalist>
                        </p>
                        
                        <p>
                            <label><b>Модель:</b></label><br>
                            <input type="text" name="model" placeholder="Укажите модель">
                        </p>

                        <p>
                            <label><b>Опишите проблему:</b></label><br>
                            <textarea name="comment" rows="5" cols="60"></textarea>
                        </p>
                        <p>
                            <label><b>Обратная связь:</b></label><br>
                            <select id="communication_method" name="communication_method" onchange='choose(this, "under_communication_method")'>
                                <option value="email" selected>email</option>
                                <option value="call">Звонок на телефон</option>
                                <option value="messenger">Ответ в мессенджере </option>
                            </select>
                            <div id="under_communication_method">
                                <p>
                                    <input type="text" name="email" placeholder="Введите email">
                                </p>
                            </div>            
                        </p>

                        <input type="submit" value="Узнать цену">
                    </form>
                </div>
            </div>
            <div id="question_form">
                <div class="popup">
                    <button class="close" title="Закрыть" onclick='popUpOff("question_form")'></button>
                    <h2>Заполните поля формы</h2>
                    <form>
                        <!--TODO: подвязать к БД, написать php_код для action -->
                        <p>
                            <label><b>Вопрос:</b></label><br>
                            <textarea name="comment" rows="5" cols="80"></textarea>
                        </p>
                        <p>
                            <label><b>Обратная связь:</b></label><br>
                            <select id="communication_method2" name="communication_method2" onchange='choose(this, "under_communication_method2")'>
                                <option value="email" selected>email</option>
                                <option value="call">Звонок на телефон</option>
                                <option value="messenger">Ответ в мессенджере </option>
                            </select>
                            <div id="under_communication_method2">
                                <p>
                                    <input type="text" name="email" placeholder="Введите email">
                                </p>
                            </div>            
                        </p>
                        <input type="submit" value="Задать вопрос">
                    </form>
                </div>
            </div>
            <div id="recall_form">
                <div class="popup">
                    <button class="close" title="Закрыть" onclick='popUpOff("recall_form")'></button>
                    <h2>Заполните поля формы</h2>
                    <form>
                        <!--TODO: подвязать к БД, написать php_код для action -->
                        <p>
                            <label>Имя:</label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <label>Номер телефона:</label>
                            <input type="text" name="phoneNumber">
                        </p>
                        <input type="submit" value="Перезвоните мне">
                    </form>
                </div>
            </div>  
        </main>
        <footer>
            <ul>
                <li>
                    <a href="about_company.html">О компании</a>
                </li>
                <li>
                    <a href="company_details.html">Реквизиты</a>
                </li>
                <li>
                    <a href="contacts.html">Контакты</a>
                </li>
            </ul>
            <div class="center">
                <label>Тестовая страница 2021</label>
            </div>            
        </footer>
        <script src="scripts/popup.js"></script>
        <script src="scripts/сhoose_communication_method.js"></script>
    </body>
</html>