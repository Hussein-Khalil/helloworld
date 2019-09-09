Test Package - Hello World
-

------------- Step  1 ----------------
#### Struktur:
* packages
  * hukh
    * helloworld
       * src
           * http 
           * routes
           * views
           
           `MainServiceProvider.php`
           
                ``` public function register()
                       {
                           $this->app->make('Hukh\Helloworld\HomeController');
                       }
                   
                       /**
                        * Bootstrap services.
                        *
                        * @return void
                        */
                       public function boot()
                       {
                           $this->loadViewsFrom(__DIR__ . '/views', 'helloworld');
                           include __DIR__ . '/routes/web.php';
                       }
                ```
         `.gitignore`
       
         `composer.json`
       
             ```
             {
                 "name": "hukh/helloworld",
                 "description": "This will print hello world.",
                 "authors": [
                     {
                         "name": "John Doe",
                         "email": "johndoe@example.com"
                     }
                 ],
                 "minimum-stability": "dev",
                 "require": {},
                 "autoload": {
                     "classmap": [
                     ],
                     "psr-4": {
                         "App\\": "app/",
                         "Hukh\\Helloworld\\": "src/"
                     }
                 },
                  "extra": {
                         "providers": [
                             "Hukh\\Helloworld\\MainServiceProvider"
                         ]
                     }
             }
             ```
         `readme.md `   
       
       
#####
  in `config/app.php` add `Hukh\Helloworld\MainServiceProvider::class,` after Package Service Providers.
  
  in `composer.json` add ` "Hukh\\Helloworld\\": "packages/hukh/helloworld/src/"`
  
  example:
  ``` "autoload": {
             "psr-4": {
                 "App\\": "app/",
                 "Hukh\\Helloworld\\": "packages/hukh/helloworld/src/"
             },
```
  
------------- Step  2 ----------------
