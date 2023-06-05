# Install
### Trait
Add **HasUserId** trait to your models

```php

use Atin\LaravelUserbale\Traits\HasUserId;

class User extends Authenticatable
{
    use HasUserId, …
```