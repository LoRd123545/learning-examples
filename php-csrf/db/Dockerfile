FROM mysql:8.0

ENV MYSQL_DATABASE=users
ENV MYSQL_USER=admin
ENV MYSQL_PASSWORD=password
ENV MYSQL_ROOT_PASSWORD=password

COPY create_users_table.sql /docker-entrypoint-initdb.d/

EXPOSE 3306