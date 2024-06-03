<?php

namespace Someblueuser\AudioUpload\Providers;

use Flarum\Foundation\AbstractServiceProvider;
use FoF\Upload\Helpers\Util;
use Someblueuser\AudioUpload\Templates\AudioTemplate;

class AudioUploadServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->container->resolving(Util::class, function (Util $util) {
            $util->addRenderTemplate($this->container->make(AudioTemplate::class));
        });
    }
}
