# _Salon_

#### _Epicodus-PHP, Week 3 Independent Project, 07.14.2017_

#### By _**Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter a Stylist or multiple stylists. Within stylists, the user can add clients that belong. The user can rename any stylist, or delete any stylist along with its clients. The user can rename or delete any client as well._

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
  * Open MAMP and click Preferences
  * Click Ports and set Apache Port to 8888, and Msql port to 8889
  * Click Web Server and set the document root to the web folder of salon directory and click OK
  * In MAMP click Start Servers
  * In MAMP click Open WebStart page
  * In Tools menu of WebStart page, click phpMyAdmin
  * Once in phpmyadmin page, click Import tab, click browse button, then navigate to the bestaurants.sql file in the project directory
  * In your browser, enter 'localhost:8888' to view the webpage on your browser

## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
| User enters stylist name on landing page | Madonna | A page displays with a list of stylists and a link to landing page |
| User clicks stylist link on landing page | Click Madonna | A page displays with stylist name, a form to add a client, and links to edit stylist or return to landing page |
| User enters client name on stylist page | Alex | The page now displays a list with the client's name as a link |
| User clicks client name link on stylist page | Click Alex | A page displays with client name, a form to rename the client, a button to delete client, and a link to return to landing page |
| User enters new name on client edit page | Jane | A confirmation page displays with new client name and a link to landing page |
| User visits client edit page | Click delete client button | A confirmation page displays with deleted client name and a link to landing page |
| User visits a stylist page | Click edit stylist link | A page displays with stylist name, a form to rename the stylist, a button to delete stylist, and a link to return to landing page |
| User enters new name on stylist edit page | Beyonce | Stylist page is displayed with new name |
| User visits stylist edit page | Click delete stylist button | Landing page displays with deleted stylist no longer in stylist list (when a stylist is deleted, all of their clients are deleted as well) |

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
