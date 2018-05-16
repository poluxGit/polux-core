# polux-core

Core PHP Project

A Personal framework processing generic application from a business model.

Docker Command

- Database :

```bash
docker run --name coredb-mysql \
  -e MYSQL_USER=polux -e MYSQL_PASSWORD=dev -e MYSQL_DATABASE=coredb01 \
  -p 3306:3306 -d mysql/mysql-server:5.7
```
