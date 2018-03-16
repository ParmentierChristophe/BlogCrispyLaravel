# Blog Crispy Laravel

Simple personal blog created with laravel. you can see the front-end [here](https://github.com/ParmentierChristophe/BlogCrispy)

### Installation ###

* type `git clone git@github.com:ParmentierChristophe/BlogCrispyLaravel.git projectname` to clone the repository
* type `cd projectname`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* if you use sqlite :
   * type `touch database/database.sqlite` to create the file
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

### Include ###
* Flexboxgrid
* Laravel-Markdown
* Fontawesome


### Features ###



### Tricks ###



### Tests ###



### License ###


### Screenshot ###
![1](https://user-images.githubusercontent.com/13301795/37537031-a15720a0-294c-11e8-868e-49d7e7032f7b.png)
![2](https://user-images.githubusercontent.com/13301795/37537035-a4a05e70-294c-11e8-89e3-a352571534a0.png)
![3](https://user-images.githubusercontent.com/13301795/37537039-a5d7b694-294c-11e8-9f5a-bbff0f6384e4.png)
![4](https://user-images.githubusercontent.com/13301795/37537043-a7079b24-294c-11e8-941b-4126b779e1e4.png)

### Todos ###
* add newsletter solution
* Complete user migration
* 404 page
* connection page
* admin page with all articles
* form for create a new article on markdown
* And more ...
