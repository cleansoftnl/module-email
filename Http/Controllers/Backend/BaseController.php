<?php

namespace Cms\Modules\Contact\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;

class BaseController extends BaseBackendController
{
    public function boot()
    {
        parent::boot();

        $this->theme->setTitle('contact');
    }
}
