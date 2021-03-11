# docker-workspace

Workspace includes:
- Nginx
- PHP (7.4, 8.0)
- MySQL (5.7, 8.0)
- PhpMyAdmin
- Redis
- Grafana

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

This workspace is inspired by
[drandin/docker-php-workspace](https://github.com/drandin/docker-php-workspace)
