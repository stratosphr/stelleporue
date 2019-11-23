<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    class Order extends Model {
        
        public function client() {
            return $this->belongsTo(Client::class);
        }
        
        public function articles() {
            return $this->belongsToMany(Article::class);
        }
        
    }
