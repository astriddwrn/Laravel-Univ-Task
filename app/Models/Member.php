<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Member extends Model
{
    private $dataMembers;

    public function __construct(){
        $this->dataMembers = collect([
                [
                    'image'=>'andrew.png',
                    'name'=>'Andrew Wiguna',
                    'nim'=>'2440030185',
                    'email'=>'andrew.wiguna@binus.ac.id'
                ], 
                [
                    'image'=>'astrid.png',
                    'name'=>'Astrid Dewi Rana',
                    'nim'=>'2440064476',
                    'email'=>'astrid.rana@binus.ac.id'
                ], 
                [
                    'image'=>'joel.png',
                    'name'=>'Joel Rizky Wahidiyat',
                    'nim'=>'2440050981',
                    'email'=>'joel.wahidiyat001@binus.ac.id'
                ], 
                [
                    'image'=>'joelry.png',
                    'name'=>'Joelry Keegan Tariga',
                    'nim'=>'2440048283',
                    'email'=>'joelry.keegan@binus.ac.id'
                ]
            ])->map(function ($name) {
            return (object)$name;
        });
    }

    public static function getData(){
        $members = new Member;
        return $members->dataMembers;
    }
}
