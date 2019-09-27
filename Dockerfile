FROM debian:jessie
LABEL maintainer Alexander Reinelt <alexander@reinelt.de.com>
RUN apt-get update && apt-get dist-upgrade -y
RUN apt-get install -y ca-certificates \
	nginx \
	php5-fpm \
	vim	\
	git \
	curl \
	wget \
	unzip \
	locales
RUN mkdir /var/www/physio.de
ADD config/physio.conf /etc/nginx/conf.d/physio.conf
ADD config/php.ini /etc/php5-fpm/php.ini
ADD config/start.sh /start.sh
RUN chmod +x /start.sh 

CMD ["./start.sh"]
