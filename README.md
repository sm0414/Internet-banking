# <p align="center">網銀系統</p>

使用Symfony框架完成，提供API讓商城呼叫

port: 8888

### 下載後請依序執行
    $ docker-compose up -d --build
    $ docker exec -it php74-container bash -c "composer install"
    $ docker exec -it php74-container bash -c "php bin/console doctrine:schema:create && php bin/console cache:clear && chmod 777 -R var"


#### 將資料異步寫入資料庫 (讓他跑著，或直接寫進排程中)
    $ docker exec -it php74-container bash -c "php bin/console messenger:consume async -vv"
