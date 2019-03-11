# PHP 
### PHP - general-purpose scripting language especially suited to web development.
* https://secure.php.net/

# Books, resources

* https://phptherightway.com/


## Creating a persistent hit counter

We need some way of storing data since PHP interpreter will "forget" each session once the page is served.

### Simplest(not necessarily the best) solution - store data in a text file
* http://php.net/manual/en/function.fopen.php

* http://justintadlock.com/web-design/counter
* https://stackoverflow.com/questions/18236599/visits-counter-without-database-with-php

### What happens when  many visitors access the page at the same time?

