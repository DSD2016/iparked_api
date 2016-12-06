# iparked_api

iParked web API for REST communication with mobile application

## Contents
* [Environment setup](#installation)
  * [Windows](#windows)
  * [Linux](#linux)
* [Project setup](#project-setup)

## Installation

### Windows

__A)__ It is suggested to have bash for Windows. If that works you can just follow Linux instructions for Ubuntu.

__B)__ Install Docker for Windows from [docker.com](https://www.docker.com/)

### Linux

#### Install docker
_for Ubuntu/Debian/Mint use_
```
apt-get update
apt-get install docker git
```

_for Fedora/RHEL/Centos use_
```
dnf install docker git
```

#### Install docker-compose
```
sudo su
curl -L "https://github.com/docker/compose/releases/download/1.8.1/docker-compose-$(uname -s)-$(uname -m)" > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
```

### Project setup

Open terminal and navigate to folder where project will be configured.

#### Clone and configure Laradock and project
```
git clone https://github.com/LaraDock/laradock
git clone https://github.com/DSD2016/iparked_api
```
#### Edit Laradock configuration

Change 'applications' section in docker-compose.yml to look like this
```
applications:
        image: tianon/true
        volumes:
            - ../iparked_web:/var/www
            - ../iparked_api:/var/www/api
#            - ../:/var/www/sample
```

Change INSTALL_AEROSPIKE_EXTENSION variable to false in workspace/Dockerfile
```
# ARG INSTALL_AEROSPIKE_EXTENSION=true
ARG INSTALL_AEROSPIKE_EXTENSION=false
```

#### Start docker

On Linux do this
```
sudo gpasswd -a ${USER} docker
sudo systemctl start docker
```
If docker won't start, log out and log in.

In laradock\ folder start docker image
```
docker-compose up -d nginx mysql
```

#### Start bash in workspace
```
cd workspace

# for Linux
docker-compose exec workspace bash

# for Windows
docker exec -it {workspace-container-id} bash
```

#### Install missing php libraries
```
composer update --no-scripts
```

#### Fix missing cache
```
mkdir bootstrap/cache
php artisan cache:clear
composer dump-autoload
```

#### Create env file and generate app key
```
cp .env.example .env
sudo chmod +x artisan
./artisan key:generate
```
