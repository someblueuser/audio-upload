<?php

use Someblueuser\AudioUpload\Providers\AudioUploadServiceProvider;
use Flarum\Extend;

return [
    (new Extend\ServiceProvider())->register(AudioUploadServiceProvider::class),
];
