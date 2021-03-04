# docker-workspace

Workspace includes:
- Nginx
- PHP (7.4, 8.0)
- MySQL (5.7, 8.0)

To start up workspace, run:
```
docker-compose up -d
```

Edit hosts file (`C:\Windows\System32\drivers\etc\hosts`):
```
127.0.0.1 php-74.docker
127.0.0.1 php-80.docker
127.0.0.1 phpmyadmin.docker
```

Phpmyadmin setup:
- download [phpmyadmin](https://www.phpmyadmin.net/) and put it into `/www/phpmyadmin`
- change config's permissions if needed (`chmod 555 config.inc.php`) 

How to enter into any container:
```
docker-compose exec php-7.4 bash
```

This workspace is based on
[drandin/docker-php-workspace](https://github.com/drandin/docker-php-workspace)
