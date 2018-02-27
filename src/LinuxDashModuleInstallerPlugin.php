<?php

namespace Ivebeenlinuxed\LinuxDashModuleInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class LinuxDashModuleInstallerPlugin implements PluginInterface
{

    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LinuxDashModuleInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }

}
