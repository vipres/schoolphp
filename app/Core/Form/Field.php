<?php

namespace app\Core\Form;
use app\Core\Model;

class Field {
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_EMAIL = 'email';


    public Model $model;
    public string $attribute;
    public string $type;
    public string $label;

    public function __construct(Model $model, string $attribute, string $label){
        $this->model = $model;
        $this->attribute = $attribute;
        $this->label = $label;
        $this->type = self::TYPE_TEXT;
    }

    public function __toString()
    {
        return sprintf('
        <div class="mb-3">
            <label for="%s" class="form-label">%s</label>
            <input type="%s" name="%s" value= "%s" class="form-control%s" id="%s"  placeholder="%s">
            <div class="invalid-feedback">
                %s
            </div>
         </div>',
        $this->attribute,
        $this->label,
        $this->type,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->attribute,
        $this->label,
        $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }
}
