<?php

/** Important notes.
 * PHP Development is not interesting. Having worked with PHP for over 5 years,
 *  I hold the opinion that strongly typed languages are inherently better and easier to maintain.
 *
 * That being said, I am not throwing away my experience with PHP, neither do I hold any personal
 * grudges against the community. Specially WordPress, for it's well deserved market share.
 *
 * This plugin is hopefully the only generic PHP code I will write in a long time,
 * it will be WordPress specific and I vow to keep it well maintained.
 */

use \YahnisElsts\PluginUpdateChecker\v5\PucFactory;

try {

    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://raw.githubusercontent.com/asas-virtuais/asasvirtuais-wp/main/metadata.json',
        __FILE__,
        'asasvirtuais-wp'
    );

} catch (\Throwable $th) {
    error_log($th);
}
