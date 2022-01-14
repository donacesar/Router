# Router
Minimal
## Usage
### 1. As first step add the path to your page 404 controller:
```php
Router::err404($path);
```
### 2. Add url-link and controller path. Very simple. Repeat this step as much as many routes you need.
```php
Router::addRoute($path, $controller);
```
### 3. To remove some url-link:
```php
Router::removeRoute($path);
```
### 4. For start checking urls:
```php
Router::start();
```
### 5. Eventually the whole structure should look like in example below:
```php 
Router::err404('../controllers/page404.php');
    Router::addRoute('/', '../controllers/homepage.php');
    Router::addRoute('/homepage', '../controllers/homepage.php');
    Router::addRoute('/about', '../controllers/about.php');
    Router::addRoute('/messenger', '../controllers/messenger.php');
    Router::addRoute('/news', '../controllers/newsfeed.php');
Router::start();
```