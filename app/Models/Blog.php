<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    private $dataBlogs;

    public function __construct(){
        $this->dataBlogs = collect([
                [
                    'id'=>1,
                    // 'image'=>'andrew.png',
                    'title'=>'What Is a Front-End Developer?',
                    'content'=>'Front-end web development, also known as client-side development is the practice of producing HTML, CSS and JavaScript for a website or Web Application so that a user can see and interact with them directly. The challenge associated with front end development is that the tools and techniques used to create the front end of a website change constantly and so the developer needs to constantly be aware of how the field is developing.',
                    'author'=>'Michael Brandy'
                ], 
                [
                    'id'=>2,
                    // 'image'=>'joel.png',
                    'title'=>'What Is a Back-End Developer?',
                    'content'=>'So, what does the back-end look like? Nothing, really, at least not to the user. However, the back-end is always chugging along behind the scenes to power the front-end experience for visitors. Take this blog post, for example; how did this front-end get to your computer in the first place? The text, image, and code files for this post are stored in a database on a HubSpot web server. When you (or, to be exact, your browser) request to view this web page, that request gets sent to the server. The server then “serves” those files to your browser. This is the back-end at work. When you submit a form, that data gets stored in an organized database, accessed to send you an email. These operations are also part of the back-end and thus the responsibility of back-end developers.',
                    'author'=>'Harry Bridge'
                ], 
               
            ])->map(function ($name) {
            return (object)$name;
        });
    }

    public static function getData(){
        $blogs = new Blog;
        return $blogs->dataBlogs;
    }

    public static function byId($id){
        $blog = new Blog;
        return $blog->dataBlogs->firstwhere('id', $id);
    }

}
