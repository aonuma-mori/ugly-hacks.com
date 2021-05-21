# site construct

1. docker-compose
2. Wordpress settinng





## docker

## docker construct
https://qiita.com/rockinruuula1227/items/83f3f1406f339083ef3f

phpmyadmin: http://localhost:4000/
document-root: http://localhost:8000/

### docker login

```
$ docker-compose ps
         Name                        Command               State                 Ports
----------------------------------------------------------------------------------------------------
ugly-hacks_mysql_1        docker-entrypoint.sh mysqld      Up      0.0.0.0:9306->3306/tcp, 33060/tcp
ugly-hacks_php_1          docker-php-entrypoint apac ...   Up      0.0.0.0:8000->80/tcp
ugly-hacks_phpmyadmin_1   /docker-entrypoint.sh apac ...   Up      0.0.0.0:4000->80/tcp
$ docker exec -it [CONTAINER_NAME] bash
```

