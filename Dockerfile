FROM php:7.2-apache
ADD myapp.php /var/www/html/myapp.php
ADD index.html /var/www/html/index.html
ADD ports.conf /etc/apache2/ports.conf
ADD 000-default.conf /etc/apache2/sites-available/000-default.conf
CMD ["start"]
ENTRYPOINT ["/usr/sbin/apache2ctl"]
EXPOSE 8080
