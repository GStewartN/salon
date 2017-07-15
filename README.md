# _Salon_

#### _Epicodus-PHP, Week 3 Independent Project, 07.14.2017_

#### By _**Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter a Stylist or multiple stylists. Within stylists, the user can add clients that belong. The user can also delete any stylist along with its clients._

## Prerequisites

_You will need the following properly installed on your computer:_

* [MAMP](https://www.mamp.info/en/) for Windows or MacOS
* [PHP](https://secure.php.net/)
* [Composer](https://getcomposer.org/)

## Configuration/Dependencies

_The app will use PHPunit,  Silex, and Twig._

## Setup/Installation

* Open GitHub site on your browser: https://github.com/GStewartN/salon
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then paste the repository link and press enter
  * type 'cd salon' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
* To view app in browser:
* Open MAMP and set Apache Port to 8888, and Msql port to 8889
  * In MAMP click Open WebStart page
  * In tools menu of start page, click phpMyAdmin
  * Once in phpmyadmin page, click Import tab, click browse button, then navigate to the bestaurants.sql file in the project directory
  * In your browser, enter 'localhost:8888' to view the webpage on your browser

## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
|

## Technologies Used

* _PHP_
* _HTML_
* _Silex_
* _Twig_
* _Composer_
* _MAMP_
* _PHPUnit_
* _MySql_
* _phpMyAdmin_

## MySQL Commands Used

* CREATE DATABASE hair_salon
* USE hair_salon
* CREATE TABLE stylists (id serial PRIMARY KEY, name VARCHAR (255))
* USE hair_salon_test
* SELECT * FROM stylists
* USE hair_salon
* CREATE TABLE clients (name VARCHAR (255), stylist_id INT, id serial PRIMARY KEY)

### License

MIT License

Copyright &copy; 2017 Nathan Stewart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
