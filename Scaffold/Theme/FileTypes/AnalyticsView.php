<?php namespace Modules\Workshop\Scaffold\Theme\FileTypes;

use Modules\Workshop\Scaffold\Theme\Traits\FindsThemePath;

class AnalyticsView extends BaseFileType implements FileType
{
    use FindsThemePath;
    /**
     * Generate the current file type
     * @return string
     */
    public function generate()
    {
        $stub = $this->finder->get(__DIR__ . '/../stubs/analytics.blade.stub');
        if(!$this->finder->exists($this->themePathForFile($this->options['name'], '/views/partials'))) {
            $this->finder->makeDirectory($this->themePathForFile($this->options['name'], '/views/partials'), 0755, true);
        }
        $this->finder->put($this->themePathForFile($this->options['name'], '/views/partials/analytics.blade.php'), $stub);
    }
}