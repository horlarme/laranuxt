<p align="center">
  <img src="https://raw.githubusercontent.com/acidjazz/laranuxt/master/client/static/laranuxt.png" />
</p>

<p align="center">
  <a href="https://laravel.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="92" height="92" /></a>
  <a href="https://vuejs.org"><img src="https://vuejs.org/images/logo.png" width="92" height="92" /></a>
  <a href="https://www.typescriptlang.org/"><img src="https://miro.medium.com/max/816/1*mn6bOs7s6Qbao15PMNRyOA.png" width="92" height="92" /></a>
  <a href="https://tailwindcss.com"><img src="https://pbs.twimg.com/profile_images/1278691829135876097/I4HKOLJw_400x400.png" width="92" height="92" /></a>
  <a href="https://github.com/acidjazz/metapi"><img src="https://github.com/acidjazz/metapi/raw/master/logo.png" width="92" height="92" /></a>
</p>


> *NEW* Want all of your models typed out as interfaces? check out [modeltyper](https://github.com/fumeapp/modeltyper)

## Laravel + Nuxt.js Boilerplate

[![](https://img.shields.io/badge/nuxt.js-v2.15.8-04C690.svg)](https://nuxtjs.org)
[![](https://img.shields.io/badge/Laravel-v8.60.0-ff2e21.svg)](https://laravel.com)
![Test PHP](https://github.com/acidjazz/laranuxt/workflows/Test%20PHP/badge.svg)
![Test Javascript](https://github.com/acidjazz/laranuxt/workflows/Test%20Javascript/badge.svg)
[![Lint Javascript](https://github.com/acidjazz/laranuxt/actions/workflows/lint-js.yml/badge.svg)](https://github.com/acidjazz/laranuxt/actions/workflows/lint-js.yml)
[![Lint PHP](https://github.com/acidjazz/laranuxt/actions/workflows/lint-php.yml/badge.svg)](https://github.com/acidjazz/laranuxt/actions/workflows/lint-php.yml)

![](client/static/laranuxt.gif?raw=true)

### What is included

* [NUXT](https://nuxtjs.org) front end, a progressive Vue.js framework - `v2.15.8`
  * [@nuxtjs/typescript-build](https://typescript.nuxtjs.org/) TypeScript Support for Nuxt.js
  * [@nuxtjs/composition-api](https://composition-api.nuxtjs.org/) Composition API Support for Nuxt.js
  * [@nuxtjs/tailwindcss](https://tailwindcss.nuxtjs.org/) a [utility-first](https://tailwindcss.com) framework - now with PurgeCSS built in
  * [@nuxtjs/axios](https://github.com/nuxt-community/axios-module) to communicate with our API 
  * [nuxt-tailvue](https://github.com/acidjazz/nuxt-tailvue) a collection of components built for Nuxt.js, powered by TailwindCSS

* [Laravel](https://laravel.com) - for our API - `v8.60.0`
  * [MetAPI](https://github.com/acidjazz/metapi) - API helpers and utilities
  * [debugbar](https://github.com/barryvdh/laravel-debugbar) - awesome debugbar for our API
  * [ide-helper](https://github.com/barryvdh/laravel-ide-helper) - Helper files to enable help with IDE autocompletion

## Installation

### Server Installation

Please skip the next 2 steps if you have php8.0 installed.
#### PHP 8.0 Installation (Ubuntu)
```zsh
$ sudo apt install php8.0-{simplexml,mbstring,common,redis,mysql,pdo-mysql,cli,fpm,intl,opcache,curl,zip} -y
# This command installs the required php version and extensions to run the application
```
#### Setting PHP 8.0 as default (Optional)
```zsh
$ sudo update-alternatives --config php
# You will be asked to select the version to use, type the number (Selection) that matches PHP8.0
# from the below example, it's 0 then press enter
There are 4 choices for the alternative php (providing /usr/bin/php).

  Selection    Path             Priority   Status
------------------------------------------------------------
* 0            /usr/bin/php8.0   80        auto mode
  1            /usr/bin/php7.0   70        manual mode
  2            /usr/bin/php7.1   71        manual mode
  3            /usr/bin/php7.4   74        manual mode
  4            /usr/bin/php8.1   81        manual mode

Press <enter> to keep the current choice[*], or type selection number:

# Your default php version would have been changed successfully. 
```

#### Confirm PHP Version
```zsh
$ php -v
PHP 8.0.16 (cli) (built: Feb 21 2022 14:48:42) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.0.16, Copyright (c) Zend Technologies
    with Zend OPcache v8.0.16, Copyright (c), by Zend Technologies
# If response doesn't include php 8.0*, refer to the previous/above instructions. 
```
#### Copy Environment Variable and Configure
```zsh
$ cp .env.example .env # Make sure to open and configure the .env file
```
#### Generate Application Key
```zsh
$ php artisan key:generate
```
#### Database Installation (Migration & Seeding)
```zsh
$ php artisan migrate --seed --step
```
<h4 id="lauch-serve-api">Launch/Serve api</h4>
```zsh
$ php artisan serve
Starting Laravel development server: http://127.0.0.1:8000
```
Open the above url in browser or better still, make use of [Laravel Valet](https://laravel.com/docs/9.x/valet)


### Client Dependency Installation
Make sure to have installed node.
#### Install Dependency
```zsh
$ yarn install
```

#### Launch Application
```zsh
$ yarn run dev
```
This will run the application at the provided WEB_URL value in the `.env` file. Open it in the browser to view Application.

<em>Note that you must be running the server application at the API_URL value in `.env` file. Refer to [Launch/Serve API](#lauch-serve-api)</em>

### Features

