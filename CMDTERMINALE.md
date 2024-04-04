## TNTSEARCH
## installazione
composer require laravel/scout
## se non c'è la pubblicazione del vendor
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
composer require teamtnt/laravel-scout-tntsearch-driver
## per indicizzare le ricerche dare da terminale:
php artisan scout:flush "App\Models\Announcement"
## poi
php artisan scout:import "App\Models\Announcement"