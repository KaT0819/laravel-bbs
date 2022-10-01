FROM nginx

SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./conf.d/ssl.conf /etc/nginx/conf.d/ssl.conf
COPY ./conf.d/*.pem /etc/nginx/conf.d/

WORKDIR /etc/nginx/conf.d
