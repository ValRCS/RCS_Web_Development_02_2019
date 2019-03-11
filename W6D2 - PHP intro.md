# PHP 
### PHP - general-purpose scripting language especially suited to web development.
* https://secure.php.net/

# Books, resources

* https://phptherightway.com/

## PHP Functions
* https://secure.php.net/manual/en/language.functions.php
* https://www.w3schools.com/php7/php7_functions.asp
* https://www.phpexercises.com/functions-php-exercises.html
* https://www.w3resource.com/php-exercises/php-function-exercises.php

### PHP Functions are NOT case-sensitive!
* https://stackoverflow.com/questions/33273941/php-case-sensitivity

## Object-Oriented PHP
* https://secure.php.net/manual/en/language.oop5.php
* https://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762



## Creating a persistent hit counter

We need some way of storing data since PHP interpreter will "forget" each session once the page is served.

### Simplest(not necessarily the best) solution - store data in a text file
* http://php.net/manual/en/function.fopen.php

* http://justintadlock.com/web-design/counter
* https://stackoverflow.com/questions/18236599/visits-counter-without-database-with-php

### What happens when  many visitors access the page at the same time?

