FROM redis:4.0

MAINTAINER Tank <tankphper@gmail.com>

RUN /bin/ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime

RUN apt-get update \
    && apt-get install -y \
    vim \
    curl \
    wget \
    zip \
    lsof \
    procps

#COPY ./conf.d/redis.conf /usr/local/etc/redis/redis.conf

CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]
