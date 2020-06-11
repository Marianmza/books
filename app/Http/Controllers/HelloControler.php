<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HelloControler extends Controller
{
    public function index(){
         $user = 'Marian';
         $whatever = 'Marian';
        $comment = '<script>window.location="http://www.google.com"</script>';
         $age = 34;
         $description = 'This is a <strong>great</strong> product!';
         $fruits =['apple','pear','orange'];


        /* return view('.\hello\hello')
         ->with('whatever', $user)
         ->with('age',$age);
 */

      /*   return view('hello.hello', [
            'whatever'=> $user,
            'age' => $age
        ]); */



        // works only with same name of variable and same name of var in view
        return view ('hello/hello', compact('whatever','age','comment','description','fruits'));
       /*  return view('.\hello.hello') ;
        return view('hello/hello') ; */
    }
}
