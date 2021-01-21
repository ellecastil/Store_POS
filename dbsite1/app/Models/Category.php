<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    
    class Category extends Model{
        protected $table = 'tblcategory';   //table name

        //table column
        protected $fillable = [
            'category', 
        ];

        public $timestamps = false;
        protected $primaryKey = 'cat_id';

    }
