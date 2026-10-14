to start docker
```sh
docker build -t brevrom .

docker run --name brevrom -d --replace \
 --userns=keep-id:uid=82,gid=82 --user 0:0 \
  -v /home/user/www:/var/www/html \
  -p 9000:9000 -p 9003:9003 brevrom
```

tested/working with podman