FROM ctftraining/base_image_nginx_mysql_php_73

LABEL Author="guoyanan"
LABEL Blog="https://guoyanan1g.github.io"

COPY ./files /tmp/
RUN cp -rf /tmp/html /var/www/ \
    && cp -f /tmp/flag.sh /flag.sh \
    && chown -R www-data:www-data /var/www/html \
    && sed -i 's/skip-network/#skip-network/' /etc/my.cnf.d/mariadb-server.cnf
