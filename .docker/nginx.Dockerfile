FROM nginx:alpine

COPY conf/default.conf /etc/nginx/conf.d

WORKDIR /var/www/iquest
