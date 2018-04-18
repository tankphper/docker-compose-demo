FROM nginx:1.13

MAINTAINER Tank <tankphper@gmail.com>

RUN /bin/ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

RUN apt-get update \
    && apt-get install -y \
    vim \ 
    curl \
    wget \
    zip \
    lsof \
    procps \
    && apt-get clean \
    && apt-get autoremove
