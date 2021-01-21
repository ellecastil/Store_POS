<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    
    class User2 extends Model{
        protected $table = 'tbladmin';   //table name

        //table column
        protected $fillable = [
            'username', 'password', 
        ];

        public $timestamps = false;
        protected $primaryKey = 'id';

        protected $hidden = [
            'password'
        ];
    }
