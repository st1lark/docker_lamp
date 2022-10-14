FROM ubuntu
ENV TZ=Europe/Moscow
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN  apt update && apt -y install software-properties-common && add-apt-repository ppa:ondrej/php

RUN apt update && apt install -y \
	libapache2-mod-php8.0 \
	php8.0-mysqli \
	php8.0-curl \
	php8.0-common

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]

