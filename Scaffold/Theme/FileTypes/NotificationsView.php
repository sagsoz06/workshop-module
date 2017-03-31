<?php namespace Modules\Workshop\Scaffold\Theme\FileTypes;

use Modules\Workshop\Scaffold\Theme\Traits\FindsThemePath;

class NotificationsView extends BaseFileType implements FileType
{
    use FindsThemePath;
    /**
     * Generate the current file type
     * @return string
     */
    public function generate()
    {
        $stub = $this->finder->get(__DIR__ . '/../stubs/notifications.blade.stub');
        $this->finder->makeDirectory($this->themePathForFile($this->options['name'], '/views/partials'), 0755, true);
        $this->finder->put($this->themePathForFile($this->options['name'], '/views/partials/notifications.blade.php'), $stub);
    }
}