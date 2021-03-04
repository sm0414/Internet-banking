<p align="center" style="font-size: 40px;">網銀系統</p>


### 下載後請依序執行
    $ docker-compose up -d --build

    $ docker exec -it php74-container bash -c "php bin/console doctrine:schema:create && php bin/console cache:clear && chmod 777 -R var"
