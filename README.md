![SPHERE.IO icon](https://admin.sphere.io/assets/images/sphere_logo_rgb_long.png)

# PHP Hello API

[![Build Status](https://travis-ci.org/sphereio/sphere-hello-api-php.svg?branch=master)](https://travis-ci.org/sphereio/sphere-hello-api-php)

An example to authenticate your application to [SPHERE.IO](http://sphere.io) and get your products, using PHP and the Sphere PHP SDK.

## Run SDK example

Add your project key, client id and secret to `config.php`.

```bash
# Install Composer if not installed yet
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the dependencies:

```bash
composer install
```

Then activate the php builtin web server

```sh
cd <project_folder>
php -S localhost:8000 -t sdk/
```

Now navigate to [http://localhost:8000](http://localhost:8000) in your browser.

## Run RAW example

Add your project key, client id and secret to `config.php`.

Then activate the php builtin web server

```sh
cd <project_folder>
php -S localhost:8000 -t raw/
```

Now navigate to [http://localhost:8000](http://localhost:8000) in your browser.