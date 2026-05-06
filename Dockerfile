FROM php:8.4-fpm-alpine

RUN apk add --no-cache nginx

COPY nginx.conf /etc/nginx/http.d/default.conf

WORKDIR /var/www/html/vcn
COPY . .

RUN mkdir -p /run/nginx /var/log/nginx

EXPOSE 80

CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"
