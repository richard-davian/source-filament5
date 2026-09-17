<?php

namespace App\Models;

use App\Models\Concerns\HasPublicUuid;
use App\Observers\BannerObserver;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[Guarded([])]
#[ObservedBy(BannerObserver::class)]
class Banner extends Model
{
    use HasPublicUuid;
}
