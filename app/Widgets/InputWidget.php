<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class InputWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'name' => 'name',
        'value' => null,
        'type' => 'text',
        'class' => 'form-control',
        'placeholder' => '',
        'id' => 'b-input',
        'required' => false,
        'label' => false,
        'label-name' => null,
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.input_widget', [
            'config' => $this->config,
        ]);
    }
}
