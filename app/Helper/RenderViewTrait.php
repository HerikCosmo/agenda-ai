<?php

namespace App\Helper;

trait RenderViewTrait
{
    public static function renderView(string $path, array $data = []): string
    {
        extract($data);

        ob_start();
        require __DIR__ . '/../../view/' . $path;
        $html = ob_get_clean();

        return $html;
    }
}