<?php


namespace App\Helper;

use Throwable;

class ImageUploadHelper
{
    public static function upload($image, $folder = 'images')
    {
        try {
            $random = bin2hex(random_bytes(5));
            $size = getimagesize($image->path());
            if (!$size || count($size) < 2) {
                return redirect()->back();
            }
            $extension = $image->getClientOriginalExtension();
            $fileName = $random . '-' . date('his') . '-' . $random . '.' . $extension;
            return $image->move($folder, $fileName);
        } catch (Throwable $e) {
            dd($e->getMessage());
        }
    }
}
