#Спрвочка по командам для docker и docker-compose
1) `docker-compose up -d` - поднимаем контейнер
2) `docker-compose down -d` - глушим
3) `docker-compose up -d --build` - если контейнер собирается из
Docker файла, то чтобы запущенный контейнер пересобрать с изменениями
внесесенными в Docker файл нужно добавить параметр `--build`
4) `docker exec -it <имя контейнера или ID> <вызов консольной команды>`
пример: `docker exet -it lec_php_fpm /bin/bash` - запускаем bash самого
docker контейнера
5) `docker ps -a` - список зарегестрированных docker 
контейнеров в системе

