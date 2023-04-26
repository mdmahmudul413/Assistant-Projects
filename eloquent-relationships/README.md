## **Class 33 (One to One)**

    1. A relation between users and phones table

    2. We already have user model migration

    3. So now, we have to create phone model and migration

        command: php artisan make:model Phone -m

    4. To make relationship with users table, we add column in the phones table like bellow

        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // foreign key
            $table->string('user_id');
            $table->timestamps();
        });

    5. Now inside user model,

        public function phone(){
            return $this->hasOne(Phone::class);
        }

    6. Then inside phone model,

        public function user(){
            return $this->belongsTo(User::class);
        }
    
      Note: This is the inverse relation of user model

    7. We can check the relation inside web.php,

        a. To get phone using user model

            Route::get('/', function () {
                $user  = User::find(1);
                $phone = User::find(1)->phone;
                $phone = User::find(2)->phone;
                return $phone;
            });

        b. To get user using phone model

            Route::get('/', function () {
                $phone = Phone::find(1);
                $user  = Phone::find(1)->user;
                $user  = Phone::find(2)->user;
                return $user;
            });

    8. If we don't use model name(user_id) in the column then,

        suppose now the foreign key is "user_profile_id" 

            a. Now inside user model,

                public function phone(){
                    return $this->hasOne(Phone::class, 'user_profile_id');
                }

            b. Then inside phone model,

                public function user(){
                    return $this->belongsTo(User::class, 'user_profile_id');
                }

    9. Things to remember,

        a. The table which has foreign key, belongsTo() function will use in the respected model to make one to one relationship

        b. The other model will use hasOne() function

## **Class 33 (One to Many)**

    1. A relation between posts and comments table
    
    2. So now, we have to create post and comment model and migration

        command: 
            
            a. php artisan make:model Post -m

            b. php artisan make:model Comment -m

    3. We will add columns in the posts table like bellow

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

    4. And we will add columns in the comments table like bellow

        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // foreign key
            $table->integer('post_id');
            $table->string('message');
            $table->timestamps();
        });

    5. Now inside post model,

        public function comments(){
            return $this->hasMany(Comment::class);
        }

    6. Then inside comment model,

        public function post(){
            return $this->belongsTo(Post::class);
        }
    
      Note: This is the inverse relation of post model

    7. We can check the relation inside web.php,

        a. To get comments using post model

            Route::get('/', function () {
                $post = Post::find(1);
                $comments = Post::find(1)->comments;
                $comments = Post::find(2)->comments;
                $comments = Post::find(3)->comments;
                return $comments;
            });

        b. To get post using comment model

            Route::get('/', function () {
                $comment = Comment::find(1);
                $post = Comment::find(1)->post;
                $post = Comment::find(2)->post;
                $post = Comment::find(3)->post;
                $post = Comment::find(4)->post;
                $post = Comment::find(5)->post;
                $post = Comment::find(6)->post;
                return $post;
            });

    8. To get all post with comments,

        $posts = Post::with('comments')->get();
        return $posts;

     9. Things to remember,

        a. The table which has foreign key, belongsTo() function will use in the respected model to make one to one relationship

        b. The other model will use hasMany() function

## **Class 33 (Many to Many)**

    1.  A relation between posts and categories table

    2. In many to many relationship, if want to make relation between posts and categories table, 
    
        a. We have to make another table which is pivot table name category_post

        b. To set the name of pivot table, we have to always maintain alphabetic order

        c. Inside pivot table, we have to take category_id and post_id collums 

    3. So now, we have to create post and category model and migration

        command: 
            
            a. php artisan make:model Post -m

            b. php artisan make:model Category -m

    4. Pivot table migration file will be created like,

        command: php artisan make:migration create_category_post_table

    5. We will add columns in the posts table like bellow

        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

    6. We will add columns in the posts table like bellow

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

    7. We will add columns in the category_post table like bellow

        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('post_id');
            $table->timestamps();
        });

    8. Now inside post model,

        public function categories(){
            return $this->belongsToMany(Category::class);
        }

    9. Now inside category model,

        public function posts(){
            return $this->belongsToMany(Post::class);
        }

    10. We can check the relation inside web.php,

        a. To get categories using post model

            Route::get('/', function () {
                $categories = Post::find(1)->categories;
                $categories = Post::find(2)->categories;
                $categories = Post::find(3)->categories;

                // get all post with categories
                $posts = Post::with('categories')->get();

                return $posts;
            });

        b. To get posts using category model

            Route::get('/', function () {
                $posts = Category::find(1)->posts;
                $posts = Category::find(2)->posts;

                // get all categories with posts
                $categories = Category::with('posts')->get();
                return $categories;
            });

