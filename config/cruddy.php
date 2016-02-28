<?php return array(
    // The title of the application. It can be a translation key.
    'brand' => 'نمایش سایت  ',

    // The link to the main page
    'brand_url' => '/',

    // The name of the view that is used to render the dashboard.
    // You can specify an entity id prefixing it with `@` like so: `@users`.
    'dashboard' => 'cruddy::dashboard',

    // The URI that is prefixed to all routes of Cruddy.
    'uri' => 'admin',

    // The class name of permissions driver.
    'permissions' => 'Kalnoy\Cruddy\Service\PermitsEverything',

    // The middleware that wraps every request to Cruddy. Can be used for authentication.
    'middleware' => null,

    // Main menu items.
    //
    // How to define menu items: https://github.com/lazychaser/cruddy/wiki/Menu
    'menu' => [
        // ['label'=>'کاربران','entity'=>'users'],
        ['label'=>'زمینه فعالیت','entity'=>'activiy_fields'],
        ['label'=>'اسلایدر اصلی','entity'=>'main_slider'],
        ['label'=>'معرفی گروه','entity'=>'introduction'],
        ['label'=>'تیم وکالت','entity'=>'our_team'],
        ['label'=>'چرا ما','entity'=>'motto'],
        ['label'=>'مقالات','entity'=>'article'],
        ['label'=>'تماس با ما','entity'=>'contact_us'],
    ],

    // The menu that is displayed to the right of the main menu.
    'service_menu' => [

    ],

    // The list of key value pairs where key is the entity id and value is
    // an entity class name. For example:
    //
    // 'users' => 'App\Entities\User'
    //
    // Class is resolved out of IoC container.
    'entities' => [
        // 'users' => 'App\\Entities\\UserSchema',
        'activiy_fields' => 'App\\Entities\\activityFields',
        'main_slider' => 'App\\Entities\\MainSlider',
        'introduction' => 'App\\Entities\\Introduction',
        'our_team' => 'App\\Entities\\OurTeam',
        'motto' => 'App\\Entities\\Motto',
        'article' => 'App\\Entities\\Article',
        'contact_us' => 'App\\Entities\\ContactUs',
        
    ],
);