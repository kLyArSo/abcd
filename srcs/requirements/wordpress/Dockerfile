FROM debian:buster
RUN apt-get update
RUN apt-get install wget unzip php-mysql php-mbstring php7.3-fpm
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz && mv wordpress/* var/www/html && mv /Users/ylhouari/Desktop/INCEPTION/srcs/requirements/wordpress/wp-config.php var/www/html
