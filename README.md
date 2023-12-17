# laravel-todo
practice laravel

# overview
laravelとgitの練習  
あまりgitを使ってこなかったためぎこちなさを既に感じている。

# library  
livewire  
laravel ui  
bootstrap  
AdminLTE  
..他に練習になりそうなものがあれば追加していきたい。

# memo  
composer require jeroennoten/laravel-adminlte  
php artisan adminlte:install  
php artisan adminlte:install --only=auth_views  
この辺りはdocker compose時に入れるのは後々。。  

Livewire page component layout view not found: [components.layouts.app]  
上記のようなエラーに遭遇した。  
調べてみるとLayout云々でエラーが出てるらしい。  
そもそもそのファイルなくね？となり  
php artisan livewire:publish --config  
でconfig/livewire.phpを生成。reloadすると正常に表示された。  
admin_user_table  
php artisan make:model Admin/AdminUser  
php artisan make:controller Admin/LoginController  

# 参考記事
dockerからlaravel立ち上げまで  
https://qiita.com/hitotch/items/869070c3a9f474a358ea  

livewire  
https://reffect.co.jp/laravel/laravel-livewire  

AdminLTE  
https://zenn.dev/egstock_inc/articles/6d07a13bdc59a3
