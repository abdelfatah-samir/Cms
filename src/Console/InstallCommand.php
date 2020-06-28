<?php
namespace AbdelfatahSamir\Cms\Console;
use Illuminate\Console\Command;
class InstallCommand extends Command
{
    protected $name = 'cms:install';
    protected $description = 'CMS';
    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $this->call('uploader:install');
                $this->call('vendor:publish', ['--provider' => 'Spatie\MediaLibrary\MediaLibraryServiceProvider','--tag' => 'migrations']
		);
        $this->call('migrate');
    }
}
