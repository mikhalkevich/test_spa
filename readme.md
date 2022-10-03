## Тестовое задание
Необходимо разработать SPA веб-сайт с простой системой комментирования.
## Базовая установка
- git clone https://github.com/mikhalkevich/test_spa
- cd test_spa
- docker-compose up -d
- cd database
- docker-compose up -d
## Настройка
В файле <code>src/config/config.php</code> необходимо произвести подключение к хосту базы данных. В переменную $dblocation нужно прописать свой хост. Узнать его можно с помощью команды:
- hostname -I | cut -d ' ' -f1
## Дополнительные пояснения
- Приложение работает на двух независимых Docker-образах: PHP_nginx и MySQL.  
- Вместо дефолтного образа PHP_nginx, можно использовать образ PHP_apache. Для этого необходимо установить Docker-образ файла <code>docker-compose_apache.yml</code>
- Дефолтный образ PHP_nginx подключён к файлу настроек <code>default.conf</code>
