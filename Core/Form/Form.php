<?php

namespace App\Core\Form;

use App\Core\Model;

class Form
{


    public static function begin($action, $method): Form
    {
        echo sprintf('<form action="%s" method="%s">',
            $action,
            $method
        );
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute): Field
    {
        return new Field($model, $attribute);
    }

    public function submit()
    {
        echo '<button type="submit" class="btn btn-primary">Submit</button>';
    }


}