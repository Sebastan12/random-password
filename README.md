# random-password
A random password generator

#How to Install

you can easily install the package using composer
```bash
composer require sebastan12/random-password
```

#Quickly generate your first password
by default a password with length of 8
and it uses special characters - this can be configured
```php
//Require Composer Autoload
require_once __DIR__."/vendor/autoload.php";
use RandomPassword\RandomPassword;

//How to generate a password
$generator = new RandomPassword();
echo $generator->getRandomPassword();
```

#Configuration options
random-password offers 2 configuration parameters you can pass 
1. the password length (int min 1)
2. use special characters (bool)


```php
//Using parameters to generate a 32 char logn password
//that does not use special chars
$generator = new RandomPassword(32, false);
echo $generator->getRandomPassword();
```

#License 
This project uses the MIT Licence

