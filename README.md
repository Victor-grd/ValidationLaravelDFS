# Read Me

clone un laravel vide : https://github.com/laravel/laravel
``` 
$ npm install
$ composer install
```
copy past .env.exemple and edit database info

``` 
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan make:auth (doesn't work)
$ composer require laravel/ui
$ php artisan ui vue --auth

$ php artisan make:seeder UsersTableSeeder
```

php artisan make:migration create_ingredients_table
php artisan make:migration create_ingredients-genre_table 
    (alcohol, soda, juice, other (ice, lime ...))
php artisan make:migration create_cocktails_table

php artisan make:seeder IngredientsTableSeeder
php artisan make:seeder IngredientGenresTableSeeder