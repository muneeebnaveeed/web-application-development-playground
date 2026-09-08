# Web Application Development - PHP dev stack

Docker-based replacement for the course's XAMPP setup.

## Services
- **web** (php:8.3-apache) - http://localhost:8080, serves ./htdocs
- **db** (mariadb:11) - localhost:3306, db=webappdev, user=webapp/webapp, root=root
- **phpmyadmin** - http://localhost:8081

## Usage
```
docker compose up -d      # start
docker compose down       # stop
docker compose logs -f web  # tail logs
```

Drop each week's .php file(s) into htdocs/ and open http://localhost:8080/filename.php.
