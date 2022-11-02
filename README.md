# docker_lamp

Deploy

1. Ставим пакеты `docker.io` и `docker-compose`:
```
sudo apt install docker.io docker-compose
```

2. Переходим в директорию с проектом и запускаем его:
```
docker-compose up -d --build
```
3. Ждем, пока все установится

4. Прописываем в файл `hosts` соответвие домена `test1.ru` и, например, адреса `127.0.0.1`

5. Проверяем. У нас должна отобразится страница установки Wordpress
