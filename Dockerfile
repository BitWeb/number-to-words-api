FROM bitweb/php:5.6-nginx
MAINTAINER bitweb

RUN mkdir -p /app
COPY . /app
WORKDIR /app

# Configure nginx
RUN mv docker/nginx.cnf /etc/nginx/sites-available/default
RUN sed -i "#user nginx;#user root;#" /etc/nginx/nginx.conf

# Install dependencies
RUN php composer.phar -o --prefer-dist install

RUN chown -R root:www-data .
RUN chmod -R 775 .

RUN cp docker/entrypoint.sh /docker-entrypoint.sh

VOLUME /app

CMD ["/docker-entrypoint.sh"]