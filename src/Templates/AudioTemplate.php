<?php

namespace AudioUpload\Templates;

use FoF\Upload\Contracts\Template;
use FoF\Upload\File;

class AudioUploadTemplate implements Template
{
    public function tag(): string
    {
        return 'audioUploadTemplate';
    }

    public function name(): string
    {
        return 'Audio Upload Template';
    }

    public function description(): string
    {
        return 'Template for audio files';
    }

    public function preview(File $file): string
    {
        return '[audio]' . $file->url . '[/audio]';
    }

    return [
        (new Extend\ServiceProvider())
            ->register(MyServiceProvider::class),
    ];
}