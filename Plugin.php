<?php

namespace Kanboard\Plugin\PublicHeader;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('board/view_public', 'PublicHeader:header');
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'PublicHeader';
    }

    public function getPluginDescription()
    {
        return t('Displays the project name on public board views for that project');
    }

    public function getPluginAuthor()
    {
        return 'wycre';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/wycre/kanboard-PublicHeader';
    }
}
