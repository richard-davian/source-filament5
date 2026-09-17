<?php

namespace App\Models;

use App\Models\Concerns\HasPublicUuid;
use App\Observers\AppSettingObserver;
use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[Guarded([])]
#[ObservedBy(AppSettingObserver::class)]
class AppSetting extends Model
{
    use HasPublicUuid;
}
