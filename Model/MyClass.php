<?php
namespace Magenest\Chapter8\Model;

use Magenest\Chapter8\Api\MyInterface;

class MyClass implements MyInterface{

    public function foo()
    {
       return "foo";
    }
}