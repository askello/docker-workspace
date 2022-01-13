# docker-workspace

LEMP-oriented workspace for php-developers.

Workspace includes:
- Nginx
- PHP (7.4, 8.1) (with configured CRON jobs)
- MySQL (5.7, 8.0)
- PhpMyAdmin
- Redis
- Grafana

To start up workspace, run:
```
docker-compose up -d
```

Forwarded ports (so you can connect to them from outside the docker):
```
3306 - MySQL 5.7
3307 - MySQL 8.0
6379 - Redis
```

To access available services in your browser, add this to your hosts file:
```
127.0.0.1 php-74.docker
127.0.0.1 php-81.docker
127.0.0.1 phpmyadmin.docker
127.0.0.1 grafana.docker
```
Hosts file location:
- Windows `C:\Windows\System32\drivers\etc\hosts`
- Linux | Mac `/etc/hosts`

This workspace is inspired by
[drandin/docker-php-workspace](https://github.com/drandin/docker-php-workspace)
