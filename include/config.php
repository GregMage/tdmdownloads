<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    XOOPS Project https://xoops.org/
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package
 * @since
 * @author       XOOPS Development Team
 */
function getConfig()
{
    $moduleDirName      = basename(dirname(__DIR__));
    $moduleDirNameUpper = mb_strtoupper($moduleDirName);

    return (object)[
        'name'           => mb_strtoupper($moduleDirName) . ' Module Configurator',
        'paths'          => [
            'dirname'    => $moduleDirName,
            'admin'      => XOOPS_ROOT_PATH . '/modules/' . $moduleDirName . '/admin',
            'modPath'    => XOOPS_ROOT_PATH . '/modules/' . $moduleDirName,
            'modUrl'     => XOOPS_URL . '/modules/' . $moduleDirName,
            'uploadPath' => XOOPS_UPLOAD_PATH . '/' . $moduleDirName,
            'uploadUrl'  => XOOPS_UPLOAD_URL . '/' . $moduleDirName,
        ],
        'uploadFolders'  => [
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName,
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/downloads',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/cats',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/field',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/shots',
            //XOOPS_UPLOAD_PATH . '/flags'
        ],
        'copyBlankFiles' => [
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName,
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/downloads',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/cats',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/field',
            XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images/shots',
            //XOOPS_UPLOAD_PATH . '/flags'
        ],

        'copyTestFolders' => [
            //        XOOPS_UPLOAD_PATH . '/' . $moduleDirName,
            //[
            //    constant($moduleDirNameUpper . '_PATH') . '/testdata/images',
            //    XOOPS_UPLOAD_PATH . '/' . $moduleDirName . '/images',
            //]
        ],

        'templateFolders' => [
            '/templates/',
            //            '/templates/blocks/',
            //            '/templates/admin/'
        ],
        'oldFiles'        => [
            '/class/request.php',
            '/class/registry.php',
            '/class/utilities.php',
            '/class/util.php',
            //            '/include/constants.php',
            //            '/include/functions.php',
            '/ajaxrating.txt',
        ],
        'oldFolders'      => [
            '/images',
            '/css',
            '/js',
        ],

        'renameTables' => [//         'XX_archive'     => 'ZZZZ_archive',
        ],
        'modCopyright' => "<a href='https://xoops.org' title='XOOPS Project' target='_blank'>
                     <img src='" . constant($moduleDirNameUpper . '_AUTHOR_LOGOIMG') . "' alt='XOOPS Project' /></a>",
    ];
}
