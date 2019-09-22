<?php
/**
 * @copyright Emprego Para Você Ltda
 * @see Projeto http://blockmanager.com.br
 * @package Start package for teste only
 * @author Marcos José Menezes dos Santos
 * @since 2019-09-21 22:05
 * @version 1.00
 */

if (!defined('CMS_START_TEST_ONLY')) { define('CMS_START_TEST_ONLY','Created for test'); }
echo CMS_START_TEST_ONLY;

/**
 * @see Test Only
 */
public function TestOnly()
{
    echo 'Test Only';
    echo 'New Message';
    echo 'Other edit';
}
