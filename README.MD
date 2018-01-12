# DropLet 
[![Latest Stable Version](https://poser.pugx.org/eric404/droplet/v/stable)](https://packagist.org/packages/eric404/droplet)
[![Total Downloads](https://poser.pugx.org/eric404/droplet/downloads)](https://packagist.org/packages/eric404/droplet)
[![Latest Unstable Version](https://poser.pugx.org/eric404/droplet/v/unstable)](https://packagist.org/packages/eric404/droplet)
[![License](https://poser.pugx.org/eric404/droplet/license)](https://packagist.org/packages/eric404/droplet)
[![composer.lock](https://poser.pugx.org/eric404/droplet/composerlock)](https://packagist.org/packages/eric404/droplet)

TinyLara is a Simple PHP Framework based on Composer, looks like a Tiny Laravel.
 
The name of DropLet Framework is inspired by *the Droplet*  in liu cixin's novel *The three body problem*.

DropLet Framework is just like *the Droplet* : simple , powerful and graceful
 

## Start
### Download:
```
git clone https://github.com/EricLi404/DropLet.git
cd DropLet
```

*OR:*

Download in [releases page](https://github.com/EricLi404/DropLet/releases).

### Install dependencies:

```
composer update
```
### Databases import:
- import `DropLet.sql`;
- Rename `config/database_demo.php` to `config/database.php` ;
- Modify `config/database.php` 


### Run:
```
cd public 
php -S 127.0.0.1:2333
```
Then visit [http://127.0.0.1:2333](http://127.0.0.1:2333).

**It works!**

## URL Rewrite:
### Apache
```
# .htaccess
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews
    </IfModule>

    RewriteEngine On

    # Redirect Trailing Slashes...
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```
### Nginx
```
# nginx.conf
autoindex off;

location / {
	try_files $uri $uri/ /index.php?/$uri;
}
```

## Plug-in
### Mail
Modify `config/mail.php`
```
return [
    'host'=>'smtp.xxxx.com',
    'username'=>'xxx@xxxx.com',
    'password'=>'password'
];
```
Modify `app/controllers/xxxxController.php`

```
$this->mail = Mail::to('test@gmail.com')
            ->subject('Hello World')
            ->htmlBody('<h1>Hello World from DropLet</h1>');
            
```

### Redis
Modify `config/redis.php`
```
return [
    'host' => '127.0.0.1',
    'port' => 6379
];
```
Modify `app/controllers/xxxxController.php`
```
Redis::set('key','value',3000,'ms');
echo Redis::get('key');
```


## Features:
1. MVC architecture
2. Redis ready in Laravel-style
3. Handy SMTP mailer
4. One of the Most powerful PHP ORM on Earth: [Laravel Eloquent](https://laravel.com/docs/4.2/eloquent)
5. RouteModule powered by fast and sexy [codingbean/macaw](https://packagist.org/packages/codingbean/macaw) 
## License

The DropLet framework is open-sourced software licensed under the [MIT license](https://github.com/EricLi404/DropLet/blob/master/LICENSE)