# MODX Revolution API

Used:
- https://symfony.com/
- https://api-platform.com/

## Screenshots

![MODX API - screenshot #1](https://github.com/andchir/modx2-api/blob/master/resources/screenshots/screenshot_001.png?raw=true "MODX API - screenshot #1")

![MODX API - screenshot #2](https://github.com/andchir/modx2-api/blob/master/resources/screenshots/screenshot_002.png?raw=true "MODX API - screenshot #2")

## How to install

Download and upload to your server or clone the repository.

Create an administrator with the mail address "admin@admin.com" and the password "admin" (you can change it later):
~~~
php bin/console doctrine:fixtures:load --append --group=UserFixtures
~~~

Generate JWT keys in folder "config/jwt":
~~~
jwt_passhrase=$(grep ''^JWT_PASSPHRASE='' .env | cut -f 2 -d ''='')
echo "$jwt_passhrase" | openssl genpkey -out config/jwt/private.pem -pass stdin -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
echo "$jwt_passhrase" | openssl pkey -in config/jwt/private.pem -passin stdin -out config/jwt/public.pem -pubout
setfacl -R -m u:www-data:rX -m u:"$(whoami)":rwX config/jwt
setfacl -dR -m u:www-data:rX -m u:"$(whoami)":rwX config/jwt
~~~

Get token:
~~~
curl -X POST -H "Content-Type: application/json" http://localhost:8000/authentication_token -d '{"email":"admin@admin.com","password":"admin"}'
~~~

Token usage on API page. Click "Authorize" button. Paste string with token:
~~~
Bearer MY_TOKEN
~~~
