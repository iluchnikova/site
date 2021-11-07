<!DOCTYPE html>
<html>
    <head>
        <link href="css/index.css" rel="stylesheet">
        <link href="css/news.css" rel="stylesheet">
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
                            <a href="index.php">
                              Услуги
                            </a>                            
                        </li>
                        <li>
                            <a href="#" title="Вы уже здесь">
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
            
            <div class="newsBlock">
                <!-- TODO: добавить поиск по датам (начало, конец) и ключевому слову-->
                <?php 
                // TODO: здесь прописать выгрузку новостей из БД, а также ограничить высоту одной новости и количество новостей на странице
                ?>
                <div class="new">Новость 1</div>
                <div class="new">Новость 2</div>
                <!-- TODO:  JS: при нажатии на новость возникает всплывающее окно с новостью целиком (формируется динамически с помощью PHP)-->
                
               
                
            </div>
             <!-- TODO: предусмотреть ссылку "Больше новостей", при нажатии на которую добавляется следующий блок новостей-->
            <a href="#" title="Пока не работает">Показать больше новостей</a>
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
    </body>
</html>