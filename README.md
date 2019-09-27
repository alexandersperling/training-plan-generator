# physio-tool
web-tool to create overview of exercises

## TODO

-add real exercises and pictures of them

## how to run this project local with Docker

### prerequisites

+ system with docker
+ basic docker knowledge

---
1. clone this repo to your local machine
2. build the container image
```shell
docker build -t physio .
```
3. run the following command to start the container and expose its port 8080 to your localhost port 80
```shell
docker run -d -p 80:8080 -v /path/to/the/repo/physio:/var/www/physio.de physio
```

