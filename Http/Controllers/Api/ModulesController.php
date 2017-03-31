<?php

namespace Modules\Workshop\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use InvalidArgumentException;
use Nwidart\Modules\Module;

class ModulesController extends Controller
{
    public function publishAssets($module)
    {
        try {
            Artisan::call('module:publish', ['module' => $module]);
        } catch (InvalidArgumentException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
