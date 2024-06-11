<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Contact extends Model
{
    use HasFactory;
    public $table = 'contacts';
    protected $guarded = ['id'];

    public function fullName() {
        return $this->fname . ' ' . $this->lname;
    }

    public static function keys() {
        return ["fname", "lname", "email", "phone", "birthday", "address"];
    }
}
