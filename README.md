## Installation

```
composer require kilroyweb/roles
```

Add to the $routeMiddleware array in app/Http/Kernel.php


```php
'role' => \KilroyWeb\Roles\Middleware\AuthHasRole::class,
```

Add the HasRole trait to your User class

```php
use \KilroyWeb\Roles\Traits\HasRole;
```

## Routes

Use the supplied "role" middleware to pass allowed roles

```php
Route::prefix('/manage')->middleware(['auth','role:admin,employee'])->group(function(){
    ...
});
```

## Available Methods

Use the roleIs and roleIn methods to check a user's role:

```php
if($user->roleIs('admin)){
    //user is admin role
}

if($user->roleIn(['admin','manager'])){
    //user is admin or manager role
}
```