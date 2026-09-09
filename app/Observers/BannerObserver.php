<?php

namespace App\Observers;

use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerObserver
{
    public function updating(Banner $banner): void
    {
        if ($banner->isDirty('image_path')) {
            $originalValue = $banner->getOriginal('image_path');

            if ($originalValue && Storage::disk('public')->exists($originalValue)) {
                Storage::disk('public')->delete($originalValue);
            }
        }
    }

    public function deleting(Banner $banner): void
    {
        if ($banner->image_path) {
            if (Storage::disk('public')->exists($banner->image_path)) {
                Storage::disk('public')->delete($banner->image_path);
            }
        }
    }
}
