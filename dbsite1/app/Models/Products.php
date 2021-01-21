<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    
    class Products extends Model{
        protected $table = 'tblproduct';   //table name

        //table column
        protected $fillable = [
            'product', 'cat_id', 'cost_price', 'qty','barcode'
        ];

        public $timestamps = false;
        protected $primaryKey = 'id';

    }
