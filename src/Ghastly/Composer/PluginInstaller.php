<?php

namespace Ghastly\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class PluginInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getPackageBasePath(PackageInterface $package)
    {
        return 'plugins/'.substr($package->getPrettyName(), 8);
    }

    public function supports($packageType)
    {
        return 'ghastly-plugin' === $packageType;
    }
}
