<?php

namespace Someblueuser\AudioUpload\Templates;

use FoF\Upload\Contracts\Template;
use FoF\Upload\File;

class AudioTemplate implements Template
{
    protected $mimeToShortcode = [
        'audio/mpeg' => 'mp3',
        'audio/ogg' => 'ogg',
        'audio/x-m4a' => 'm4a',
        'audio/wav' => 'wav',
        'audio/flac' => 'flac',
        'audio/webm' => 'webm'
    ];

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
        $mime = $file->mimeType;
        $extension = $this->mimeToShortcode[$mime] ?? 'mp3'; // Default to mp3 if mime type is not in the list
        return '[audio '. $extension .'="'. $file->url .'"]';
    }
}
