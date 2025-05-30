# Laravel Like

A simple Laravel package for liking and unliking users.

## Requirements
- Laravel 11 or greater.
- Laravel `User` model.

## Installation

Via Composer

``` bash
$ composer require creekmore108/l-like
```

Import LLike into your User model and add the trait.

```php
namespace App\Models;

use Creekmore108\LLike\LLike;

class User extends Authenticatable
{
    use LLike;
}
```

Then run migrations.

```
php artisan migrate
```

## Usage

Like a user.
```php
auth()->user()->like($user);
```

Unlike a user.
```php
auth()->user()->unlike($user);
```

Check if a user is liking another user.
```php
@if (auth()->user()->isLiking($user))
    You are liking this user.
@endif
```

Check if a user is liked by another user.
```php
@if (auth()->user()->isLikedBy($user))
    This user is liking you.
@endif
```

Returns the users a user is liking.
```php
auth()->user()->getLiking();
```

Returns the users who are liking a user.
```php
auth()->user()->getLikers();
```

Returns an array of IDs of the users a user is liking.
```php
auth()->user()->getLikingIds();
```

Returns an array of IDs of the users who are liking a user.
```php
auth()->user()->getLikersIds();
```

Returns an array of IDs of the users a user is liking, and who is liking a user
```php
auth()->user()->getLikingAndLikersIds()
```

Caches the IDs of the users a user is licking. Default is 1 day.
```php
// 1 day
auth()->user()->cacheLiking();

// 1 hour
auth()->user()->cacheLiking(3600);

// 1 month
auth()->user()->cacheLiking(Carbon::addMonth());
```

Returns an array of IDs of the users a user is liking.
```php
auth()->user()->getLikingCache();
```

Caches the IDs of the users who are liking a user. Default is 1 day.
```php
auth()->user()->cacheLikers();
```

Returns an array of IDs of the users who are liking a user.
```php
auth()->user()->getLikersCache();
```

Clears the Liking cache
```php
auth()->user()->clearLikingCache();
```

Clears the Likers cache
```php
auth()->user()->clearLikersCache();
```

## Testing

``` bash
$ composer test
```

## License

MIT. Please see the [license file](license.md) for more information.

