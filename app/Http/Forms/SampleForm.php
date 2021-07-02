<?php

namespace App\Http\Forms;

use Revolution\LaminasForm\Form as ZendForm;
use Laminas\Form\Element;

class SampleForm extends ZendForm
{
    /**
     * Create a new form.
     *
     * @param null|string $name
     *
     * @return void
     */
    public function __construct($name = null)
    {
        parent::__construct($name);

        $this->setAttributes([
            'action' => url('/'),
            'method' => 'post',
        ]);

        $name = new Element\Text('name');
        $name->setAttributes([
            'id'    => 'name',
            'class' => 'form-control',
            'value' => old('name'),
        ]);
        $name->setLabel('Your name');
        $name->setLabelAttributes([
            'class' => 'col-sm-2 col-form-label',
        ]);
        $name->setOptions([
            'wrapper-class' => 'row mb-3',
            'element-class' => 'col-sm-10',
        ]);

        $this->add($name);

        $this->add([
            'type'       => Element\Email::class,
            'name'       => 'email',
            'attributes' => [
                'id'    => 'email',
                'class' => 'form-control',
                'value' => old('email'),
            ],
            'options'    => [
                'label'            => 'Your email address',
                'label_attributes' => [
                    'class' => 'col-sm-2 col-form-label',
                ],
                'wrapper-class'    => 'row mb-3',
                'element-class'    => 'col-sm-10',
            ],
        ]);

        $this->add([
            'type'       => Element\Hidden::class,
            'name'       => '_token',
            'attributes' => [
                'value' => csrf_token(),
            ],
        ]);

        $this->add([
            'name'       => 'send',
            'type'       => 'Submit',
            'attributes' => [
                'value' => 'Submit',
                'class' => 'btn btn-primary',
            ],
        ]);
    }
}
