<?php
//--------------------------------------------
//change the theme package here with CamelCase
namespace Concrete\Package\ThemeDsd;

use Concrete\Theme\Concrete\PageTheme;
use Concrete\Core\Package\Package;

defined('C5_EXECUTE') or die('Access Denied.');

/**
 * Theme package.
 */
class Controller extends Package
{
    /**
     * Package handle. 
     *
     * @var string
	 * change pkgHandle name to you pagckage name.
     */
    protected $pkgHandle = 'theme_dsd';

    /**
     * Minimum required version of concrete5 for this package.
     *
     * @var string
     */
    protected $appVersionRequired = '1.0.0';

    /**
     * Package version.
     *
     * @var string
     */
    protected $pkgVersion = '1.0.0';

    /**
     * Get the package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return t("Theme DSD");
    }

    /**
     * Get the package description.
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return t("DSD backage theme for concrete 5.7.x.");
    }

    /**
     * Install routine.
     *
     * @return \Concrete\Core\Package\Package
     */
    public function install()
    {
        $pkg = parent::install();

        $theme = PageTheme::add('dsd', $pkg);
    }

    /**
     * Uninstall routine.
     *
     * @return void
     */
    public function uninstall()
    {
        parent::uninstall();
    }
}
