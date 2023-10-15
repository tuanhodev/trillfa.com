<?php

declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Screen\Field;

class TextField extends Field
{
    /**
     * Blade template
     *
     * @var string
     */
    protected $view = 'platform.fields.text-field';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [

        'class' => 'btn btn-secondary mb-3',

    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [

        'name',
        'type',
        'placeholder',
        'value'

    ];
}
