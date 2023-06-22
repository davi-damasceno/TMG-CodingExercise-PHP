# TMG-CodingExercise-PHP - Davi Simite Damasceno

## Development environment setup.

Given that the description specifies that the library should support php+7, then I configured my development environment to be backward compatible.

To archive this, I used the apache default site configuration file in the path: /etc/apache2/sites-available/000-default.conf.

Added a php file handler using [mod_proxy_fcgi module](https://httpd.apache.org/docs/2.4/mod/mod_proxy_fcgi.html). The handler only uses a specific version of php, which in this case is 7.4. This setting was made with the configuration below:
```xml
<FilesMatch ".php$">
    SetHandler "proxy:unix:/var/run/php/php7.4-fpm.sock|fcgi://localhost/"
</FilesMatch>
```

Also, I overwrote apache's default directory to reference the directory with my local github repository for this exercise.