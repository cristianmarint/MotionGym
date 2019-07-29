1. Reglas de validacion
    [reglas](https://laravel.com/docs/5.8/validation#form-request-validation)

2. Composer install

```php artisan key:generate```

3. Limpiar laravel

```
php artisan optimize
php artisan cache:clear
php artisan route:cache
php artisan view:clear
php artisan config:cache
```

  

4. Permitir acceso a otro dispositivo en la misma network


* Generación del servidor

``` php artisan serve --host 192.168.1.10 --port 80 ```

  

* Docs:

  

[Generar servidor](https://laracasts.com/discuss/channels/general-discussion/access-my-laravel-site-on-another-computer-on-the-same-network)

  

  

[Configuración de xampp](https://www.devside.net/wamp-server/accessing-websites-on-a-local-network-lan-web-server)

  
  

* En xampp httpd-xampp.conf

  

```

  

# New XAMPP security concept

  

#

  

<LocationMatch "^/(?i:(?:xampp|security|licenses|phpmyadmin|webalizer|server-status|server-info))">

  

Require local

  

Require ip 10.0.0.1

  

ErrorDocument 403 /error/XAMPP_FORBIDDEN.html.var

  

</LocationMatch>

  

```


5. Ejecutar un seeder

```
    php artisan db:seed --class=DatosBasicosTableSeeder
```