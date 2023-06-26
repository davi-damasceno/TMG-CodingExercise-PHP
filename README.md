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

Also, I overwrote apache's default directory to reference the directory with my local github repository for this exercise. Notice that this configurations it's just for development, the actual server will be using the latest php version.

## Development considerations

A new folder was created to contain the new TextInput class and the abstract Input class in order to centralize all inputs on a single place.

I have added a arbitrary validation on each textInput field in order to guarantee that the text has at least 3 characters.

The Sample.php file was updated to link to the styles.css file in order to make all stylization

I also have created a dockerfile to use the latest PHP file. To check the current PHP version, I've created the phpInfo.php file to retrieve the `phpinfo()` information.

## How to execute

Run this docker command to build and run the docker container of this test:
```
docker run --rm -it -p 9090:80 $(docker build -q .)
```

If there is a process using the 9090 port, feel free to change it =]

The application should be accessible on the URL: http://localhost:9090/Sample.php