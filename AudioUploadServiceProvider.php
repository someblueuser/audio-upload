<?php

namespace AudioUpload;

use AudioUpload\Templates\AudioUploadTemplate;
use Flarum\Foundation\AbstractServiceProvider;
use FoF\Upload\Helpers\Util;

class AudioUploadServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->make(Util::class)->addRenderTemplate($this->container->make(AudioUploadTemplate::class));
    }
}
