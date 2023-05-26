=== Fleet Manager ===
Contributors: iworks
Donate link: https://ko-fi.com/iworks?utm_source=simple-revision-control&utm_medium=readme-donate
Tags: fleet, result, boat, crew, team, sport, sailing
Requires at least: 5.0
Tested up to: 6.1
Stable tag: 2.1.1
Requires PHP: 7.2
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

The sailboat manager makes it possible to manage boats, sailors, regattas and their results.

== Description ==

== Installation ==

There are 3 ways to install this plugin:

= 1. The super easy way =
1. In your Admin, go to menu Plugins > Add
1. Search for `Fleet`
1. Click to install
1. Activate the plugin
1. A new menu `Fleet` will appear in your Admin

= 2. The easy way =
1. Download the plugin (.zip file) on the right column of this page
1. In your Admin, go to menu Plugins > Add
1. Select button `Upload Plugin`
1. Upload the .zip file you just downloaded
1. Activate the plugin
1. A new menu `Fleet` will appear in your Admin

= 3. The old and reliable way (FTP) =
1. Upload `Fleet` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. A new menu `Fleet` will appear in your Admin

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 2.1.1 (2023-02-06) =

* The special result row class has been added.

= 2.1.0 (2022-09-01) =
* Updated iWorks Rate to 2.1.1.
* Changed some strings to improve translations.

= 2.0.9 (2022-07-22) =
* Changed series names to avoid translations issues.
* Updated iWorks Options to 2.8.3.

= 2.0.8 (2022-03-23) =
* Added icons for custom posts types to allow show it in [PWA — easy way to Progressive Web App](https://wordpress.org/plugins/iworks-pwa/) plugin as PWA Shortcodes.

= 2.0.7 (2022-03-18) =
* Added filter country + year.

= 2.0.6 (2022-02-18) =
* Updated iWorks Options to 2.8.1.
* Updated iWorks Rate to 2.1.0.

= 2.0.5 (2022-01-20) =
* Updated iWorks Options to 2.8.0.
* Updated iWorks Rate to 2.0.6.

= 2.0.4 (2021-11-16) =
* Added filter `suppress_filter_pre_get_posts_limit_to_year` to turn off year limitation.
* Added World Sailing Sailor ID.
* Fixed export CSV files.
* Fixed taxonomies admin pages when are turned off.
* Fixed trophies if there was no place.

= 2.0.3 (2021-05-28) =
* Updated iWorks Rate to 1.0.3.
* Improved filter `iworks_fleet_result_serie_regatta_list` by new config options: `output` - default html works like it was, and `raw` to return array of data instead of HTML string.

= 2.0.2 (2021-05-16) =
* Fixed race code status.
* Renamed directory `vendor` into `includes`.
* Updated iWorks Options to 2.6.9.
* Improved owner boat list.

= 2.0.1 (2021-05-06) =
* Added missing flags: ESP, NED, POR.
* Added params `title` and `flags` into `fleet_regattas_list_countries` shortcode.

= 2.0.0 (2021-05-05) =
* Added `$settings` param into `iworks_fleet_boat_get_by_owner_id` filter.
* Added ability to add base fleet styles.
* Added ability to add wide body class (compatibility with 2020 theme).
* Added ability to choose country or countries for whole plugin.
* Added ability to create custom column name for races.
* Added ability to export boat results.
* Added ability to export sailor results.
* Added ability to filter results by year.
* Added ability to show English version of regatta title.
* Added ability to show/hide boat country code.
* Added boats owners.
* Added child theme for TwentyTwenty Theme.
* Added filter `iworks_fleet_result_serie_regatta_list'.
* Added filter `iworks_fleet_result_skip_year_in_title` to avoid prefixing result title by year.
* Added rel="alternate nofollow" to CVS links.
* Added sailors nation and display flag.
* Added shortcode `fleet_regattas_list_countries` to produce results countries list.
* Added shortcode `fleet_regattas_list_years` to produce results years list.
* Added trophies list.
* Improved compatibility with TwentyTwenty Theme.
* Improved hull colors choose.
* Improved results importer.
* Improved "Social Media" section.
* Removed Endomondo integration.

= 1.2.9 (2020-06-17) =
* Added MNA Codes see: https://www.sailing.org/raceofficials/eventorganizers/mna_codes.php
* Remove "POL " default prefix.

= 1.2.8 (2020-06-09) =
* Added ranking-o-mat.

= 1.2.7 (2019-11-07) =
* Updated iWorks Options to 2.6.7

= 1.2.6 (2019-11-04) =
* Fixed function for `the_title` filter - second argument should have default.
* Added shortcode "boat" to allow show boat link, data or gallery.
* Fixed taxonomies links in admin menu.

= 1.2.5 =
* Added ability to change tag link into person link.
* Added ability to show posts list on fleet person page.

= 1.2.4 =
* Added filter to adjust dates of results, to use on integrations.
* Added option to automagically add a feature image to a boat, based on image tags. By default, it is turned off.
* Changed default sort order in admin for persons.
* Changed slug for results archive from `fleet-results` to `results`.

= 1.2.3 =
* Allow to turn on/off boat hull taxonomy.
* Allow to turn on/off boat mast taxonomy.
* Allow to turn on/off boat sails taxonomy.
* Allow to turn on/off boat crew.
* Fixed problem with last regatta result by serie - it was doubled.
* Updated iWorks Options to 2.6.6

= 1.2.2 =
* Show regatta city instead area.
* Improved dates.
* Improved shortcode "dinghy_regattas_list" for all years.
* Added SVG file type to allowed mime types.
* Added serie thumbnail.

= 1.2.1 =

* Added sort order for "dinghy_regattas_list" shortcode.
* Added sort order in custom taxonomies "series".
* Remove year from table for "dinghy_regattas_list" shortcode.

= 1.2.0 =

* Added shortcode "dinghy_regattas_list".
* Added shortcode "dinghy_stats".
* Added shortcode "dinghy_boats_list".
* Added "Series" taxonomy for results.

= 1.1.1 =

* Added `country` field in regatta table.
* Added the boat list on a sailor page.
* Add year to a single result slug on save.

== Upgrade Notice ==

