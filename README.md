# IPInfo-Class

Useful basic class to retrieve the user ip address and information attached to it.

## Class Members

* ip.class.php

Class for handling IP related information.

```php
public static function getUserIP();
```

Gets the user IP or returns Unknown.

```php
public static function rawOutput();
```

Returns an array with all the information of the user ip fetched through [ipinfo.io](http://ipinfo.io).
