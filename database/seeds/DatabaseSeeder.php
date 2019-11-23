<?php
    
    use App\Address;
    use App\Article;
    use App\Client;
    use App\Order;
    use Illuminate\Database\Seeder;
    
    class DatabaseSeeder extends Seeder {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        public function run() {
            factory(Article::class, 10)->create();
            factory(Address::class, 30)->create();
            factory(Client::class, 40)->create();
            factory(Order::class, 80)->create();
            foreach (Order::all() as $order) {
                $articles = Article::all();
                $articles = $articles->random(rand(1, $articles->count() - 1));
                foreach ($articles as $article){
                    $order->articles()->attach($article);
                }
            }
        }
        
    }
