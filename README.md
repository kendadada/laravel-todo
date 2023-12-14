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

