<?php

namespace App\Core\Form;

use App\Core\Model;

class Field
{
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {

        return sprintf('
        <div class="mb-3">
            <label class="form-label">%s</label>
            <input type="text" name="%s" value="%s" class="form-control %s">
            <div class="invalid-feedback">
                %s
            </div>
        </div>
        ',
            $this->model->labels()[$this->attribute],
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            var_dump($this->model->getFirstError($this->attribute))
        );

    }
}