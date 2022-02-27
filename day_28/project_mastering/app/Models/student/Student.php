<?php

namespace App\Models\student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $name=santo;

        public function printName()
        {
            return$this->name;
        }

    public static function index()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'arif'
            ],
            1 => [
                'id' => 2,
                'name' => 'jenifar'
            ],
            2 => [
                'id' => 3,
                'name' => 'database'
            ],
            3 => [
                'id' => 4,
                'name' => 'sheela'
            ],
        ];
    }
}
