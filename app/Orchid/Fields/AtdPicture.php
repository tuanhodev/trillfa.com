<?php

declare(strict_types=1);

namespace App\Orchid\Fields;

use Orchid\Attachment\Models\Attachment;
use Orchid\Platform\Dashboard;
use Orchid\Screen\Field;
use Orchid\Support\Init;

/**
 * Class Picture.
 *
 * @method Picture acceptedFiles(string $value = null)
 * @method Picture name(string $value = null)
 * @method Picture required(bool $value = true)
 * @method Picture size($value = true)
 * @method Picture src($value = true)
 * @method Picture value($value = true)
 * @method Picture help(string $value = null)
 * @method Picture popover(string $value = null)
 * @method Picture title(string $value = null)
 * @method Picture maxFileSize($value = true)
 * @method Picture storage($value = null)
 * @method Picture groups($value = true)
 */
class AtdPicture extends Field
{
    /**
     * @var string
     */
    protected $view = 'platform.fields.atd-picture';

    /**
     * Default attributes value.
     *
     * @var array
     */
    protected $attributes = [
        'value'          => null,
        'target'         => 'url',
        'url'            => null,
        'maxFileSize'    => null,
        'acceptedFiles'  => 'image/*',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'name',
        'placeholder',
        'readonly',
        'required',
        'tabindex',
        'value',
        'target',
        'url',
        'groups',
        'path',
    ];

    /**
     * Picture constructor.
     */
    public function __construct()
    {
        // Set max file size
        $this->addBeforeRender(function () {
            $maxFileSize = $this->get('maxFileSize');

            $serverMaxFileSize = Init::maxFileUpload(Init::MB);

            if ($maxFileSize === null) {
                $this->set('maxFileSize', $serverMaxFileSize);

                return;
            }

            throw_if(
                $maxFileSize > $serverMaxFileSize,
                'không đặt kích thước tệp tối đa mong muốn. Điều này mâu thuẫn với các cài đặt được chỉ định trong .ini'
            );
        });
    }

    /**
     * The stored value will be in the form
     * of id attachment.
     */
    public function targetId(): self
    {
        $this->set('target', 'id');

        return $this->addBeforeRender(function () {
            $value = (string) $this->get('value');

            if (!ctype_digit($value)) {
                return;
            }

            /** @var Attachment $attach */
            $attach = Dashboard::model(Attachment::class);

            $url = optional($attach::find($value))->url();

            $this->set('url', $url);
        });
    }

    /**
     * The saved value will be in the form
     * of a full address before the file.
     */
    public function targetUrl(): self
    {
        $this->set('target', 'url');

        return $this;
    }

    /**
     * The saved value will be in the form
     * of a relative address before the file.
     */
    public function targetRelativeUrl(): self
    {
        $this->set('target', 'relativeUrl');

        return $this;
    }

    /**
     * Set custom attachment upload path
     */
    public function path(string $path): self
    {
        return $this->set('path', $path);
    }
}
