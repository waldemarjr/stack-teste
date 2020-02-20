FROM mariadb/server:10.4

MAINTAINER Waldemar Dibiazi Junior <waldemarjr@gmail.com>


# Restore database
ADD db.sql /etc/mysql/data.sql
RUN sed -i 's/MARIADB_DATABASE/'$MARIADB_DATABASE'/g' /etc/mysql/data.sql
RUN cp /etc/mysql/data.sql /docker-entrypoint-initdb.d

EXPOSE ${MARIADB_PORT}:3306