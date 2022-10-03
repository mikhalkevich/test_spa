## Тестовое задание
Необходимо разработать SPA веб-сайт с простой системой комментирования.
## Базовая установка
- git clone https://github.com/mikhalkevich/test_spa
- cd test_spa
- docker-compose up -d
- cd database
- docker-compose up -d
- После установки образов, можем перейти в PHPMyAdmin, который будет доступен по порту <code>:82</code>. Здесь необходимо создать базу данных <code>comments</code>.
- username:root, password:helloworld 
- перейти в созданную базу и импортировать файл <code>database/comments.sql</code>
## Настройка
В файле <code>src/config/config.php</code> необходимо произвести подключение к хосту базы данных. В переменную $dblocation нужно прописать свой хост. Узнать его можно с помощью команды:
- hostname -I | cut -d ' ' -f1
- Приложение доступно по ссылке [localhost:83](http://localhost:83/)
## Дополнительные пояснения
- Приложение обслуживается двумя независимыми Docker-образами: PHP_nginx и MySQL.  
- Дефолтный образ PHP_nginx подключён к файлу настроек <code>default.conf</code>
- Вместо дефолтного образа PHP_nginx, можно использовать образ PHP_apache. Для этого необходимо установить Docker-образ файла <code>docker-compose_apache.yml</code>. Тогда приложение будет доступно по порту :<code>81</code> [localhost:81](http://localhost:81/)
