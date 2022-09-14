<?php

namespace App\Core\Form;

class Form
{


    public static function begin($action, $method)
    {
         echo sprintf('<form action="%s" method="%s">',
             $action,
             $method
         );
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field($model, $attribute): Field
    {
        return new Field($model, $attribute);
    }

    public function submit()
    {
        echo '<button type="submit" class="btn btn-primary">Submit</button>';
    }



}