<?php

if (!function_exists('image_url')) {
    function image_url(string $path): string {
        return asset('storage/images/' . $path);
    }
}
