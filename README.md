# README

Build Laravel's development environment using docker.
PHP7.4/MySQL8.0/nginx/redis/node

## Install

- docker
- docker-compose(最近のdockerはいれたらdocker-composeも入るかも)

## Init

```
docker-compose build
docker-compose up -d

docker-compose ps
docker-compose exec app composer install # 多分。redisとりあえず使わないし、このコマンドは打たなくてもいい
```

http://127.0.0.1:10080

404返ってきてるけどとりあえずいけてるはず

## Reference

https://qiita.com/ucan-lab/items/17c806973e69792ada99
