ZendSkeletonApplication with Custom HTTP Methods enabled
=======================

Description
------------
This is a basic example of adding custom HTTP methods to your zend restful controllers.  I have a more detailed explanation of what I am doing on my blog: https://richardbrock1.wordpress.com/2013/03/23/custom-http-methods-in-zf2/

Instructions
-------------
This can be installed the same way as the Zend Framework Skeleton.  Here is an example of what to do with git clone and composer:

git clone https://github.com/rjbrock/ZF2-Rest-Custom-Method-Skeleton.git

cd ZF2-Rest-Custom-Method-Skeleton/

php composer.phar self-update

php composer.phar update

Testing
--------
To test the custom http method using curl:

    curl -X DOSTUFF your-server-address:port/myrest

Or, install phpunit (if you haven't already)

    composer global require phpunit/phpunit

and run in the project root

    phpunit

