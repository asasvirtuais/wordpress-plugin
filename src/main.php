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


try {

    add_action( 'admin_menu', function () {
        try {
            add_menu_page(
                'Asas Virtuais WP',
                'Asas Virtuais',
                'manage_options',
                'asasvirtuais',
                function () {
                    echo '<h1>Asas Virtuais WP</h1><iframe width="1024" height="576" style="margin: auto; display: block;" src="https://asasvirtuais.dev"></iframe>';
                }
            );
        } catch(\Throwable $th) {
            error_log($th);
        }
    } );

} catch (\Throwable $th) {
    error_log($th);
}
