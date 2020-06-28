<?php
namespace AbdelfatahSamir\Cms;
use AbdelfatahSamir\Cms\Console\InstallCommand;
use Illuminate\Support\ServiceProvider;
class CmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([InstallCommand::class,]);
    }
    public function register()
    {
    }
}
