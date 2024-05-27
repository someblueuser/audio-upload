<?php

use Someblueuser\AudioUpload\AudioUploadServiceProvider;
use Flarum\Extend;

return [
    (new Extend\ServiceProvider())
        ->register(AudioUploadServiceProvider::class),
];
