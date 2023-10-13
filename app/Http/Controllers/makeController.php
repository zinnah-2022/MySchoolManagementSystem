<?php

use App\Admin\Forms\Setting;
use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Layout\Content;

class makeCreate extends Controller
{
    public function setting(Content $content)
    {
        return $content
            ->title('Website setting')
            ->body(new Setting());
    }
}
