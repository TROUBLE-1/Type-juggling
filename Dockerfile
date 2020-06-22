FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get install -y apache2 wget net-tools php7.2 libapache2-mod-php unzip \
	php7.2-fpm \
	php7.2-common \
	php7.2-pdo \
	php7.2-mbstring \
	php7.2-gd

RUN a2enmod mpm_prefork && a2enmod php7.2

WORKDIR /var/www/html/
RUN rm -rfv index.html

RUN wget https://github.com/TROUBLE-1/Type-juggling/archive/master.zip && \
	unzip master.zip && \
	cd Type-juggling-master && \
	mv Type-juggling-master/* /var/www/html/ && \
	rm -rfv /var/www/html/master.zip && \
	rm -rfv /var/www/html/Type-juggling-master/

RUN chown www-data:www-data /var/www/html -R 
RUN chmod 755 /var/www/html

RUN wget https://raw.githubusercontent.com/Anon-Exploiter/ThemFatScripts/master/typeJugglingDockerStart.sh -O \
	/root/typeJugglingDockerStart.sh

RUN apt-get purge -y wget unzip && \
	apt-get -y autoremove

CMD ["bash", "-c", "bash /root/typeJugglingDockerStart.sh"]
