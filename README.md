# JWT 

1. `composer require tymon/jwt-auth` 
2. `php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"`
3. `php artisan jwt:secret` 
4. `php artisan install:api`
5. https://jwt-auth.readthedocs.io/en/develop/quick-start/
6. :warning: la classe dans `app/Http/Controllers/Controller` doit hériter de `\Illuminate\Routing\Controller`

