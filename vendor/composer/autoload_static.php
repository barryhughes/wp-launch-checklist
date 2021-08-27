<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit783da1ef6aab2e169337631c9fe9c5b1
{
    public static $files = array (
        '7634b3f724afa497ea6859a91d1c51d1' => __DIR__ . '/../..' . '/includes/helpers.php',
    );

    public static $classMap = array (
        'Certent_Geo\\Plugin_Requirements' => __DIR__ . '/../..' . '/includes/class-plugin-requirements.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kanopi\\Kanopi_Launch_Checklist\\ACF_Config' => __DIR__ . '/../..' . '/includes/class-acf-config.php',
        'Kanopi\\Kanopi_Launch_Checklist\\Admin' => __DIR__ . '/../..' . '/admin/class-admin.php',
        'Kanopi\\Kanopi_Launch_Checklist\\Admin_Notice' => __DIR__ . '/../..' . '/includes/class-admin-notice.php',
        'Kanopi\\Kanopi_Launch_Checklist\\Data_Structures' => __DIR__ . '/../..' . '/includes/class-data-structures.php',
        'Kanopi\\Kanopi_Launch_Checklist\\Loader' => __DIR__ . '/../..' . '/includes/class-loader.php',
        'Kanopi\\Kanopi_Launch_Checklist\\Post_Types' => __DIR__ . '/../..' . '/includes/class-post-types.php',
        'Kanopi\\Kanopi_Launch_Checklist\\i18n' => __DIR__ . '/../..' . '/includes/class-i18n.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit783da1ef6aab2e169337631c9fe9c5b1::$classMap;

        }, null, ClassLoader::class);
    }
}