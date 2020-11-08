1) Установить docker и docker-compose если потребуется
2) Поднять текущий контенер через команду 
`docker-compose up -d`
3) Зайти в контейне командой `docker-compose exec -it lec_php /bin/bash` и выполнить `php src/hello.php`
4) Настроить Docker файл и docker-compose чтобы папка Lec1 у нас монтировалась не в папку `/var/www` 
а в папку `/home/developer/www`
5) Как сдлать так, чтобы у нас монтировалась только папка src, а не папка Lec1
6) Написать программу на php которая выводит квадрат 10 на 10 звездочек
см:
https://www.php.net/manual/ru/control-structures.for.php
https://www.php.net/manual/ru/function.echo

Видео: https://youtu.be/7HM_itDmoQo

#UPD
Если есть проблемы с настройкой докера предлагаю со всем этим поиграть
на внешнем срваке.

Посмотреть видео, оно короткое, можно на скорости: https://youtu.be/qC5lCFrzinY

1) установить докер используя инструкции с 1 по 3 https://vk.cc/aCb3ZO. 
Так же надо настоить чтобы докер работал без sudo у пользователя eden.
2) Используя первый пункт установить docker-compose инструкция: 
https://vk.cc/aCb4EF
