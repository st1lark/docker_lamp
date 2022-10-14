FROM mysql

ENV DUMP wordpress.sql

COPY ./$DUMP /usr/local/

COPY ./docker-entrypoint.sh /docker-entrypoint-initdb.d/

RUN chmod a+x /docker-entrypoint-initdb.d/docker-entrypoint.sh

EXPOSE 3306
#ENTRYPOINT ["mysqld"]

CMD ["/docker-entrypoint-initdb.d/docker-entrypoint.sh"]

