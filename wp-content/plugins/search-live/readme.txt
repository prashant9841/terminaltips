=== Search Live ===
Contributors: itthinx, proaktion
Tags: ajax, ajax search, display, instant, instant search, information, live, live search, marketing, post search, product search, quick search, relevance, search, search live, search relevance, weight, weights
Requires at least: 4.0
Tested up to: 4.4.2
Stable tag: 1.3.3
License: GPLv3
Donate Link: http://www.itthinx.com/

Search Live supplies integrated live search facilities and advanced search features.

== Description ==

*Search Live* supplies effective integrated live search facilities and advanced search features.
It provides a smooth interactive experience with immediate results for your site's visitors,
making it easier and more efficient to find the right results.

It provides instant **live search results** with thumbnails where matches are found for one or multiple search keywords in titles, excerpts or content,
allows to enhance the standard search form with this functionality,
provides a flexible shortcode `[search_live]` that can be placed anywhere
to provide an interactive search form and a widget for use in sidebars.
The shortcode and widget can be fine-tuned with sensible options to improve the search experience for your visitors.

- Instant search results replace the standard WordPress search form. This is enabled by default but you can turn it off.
- You can use the **shortcode** `[search_live]` to place a search form anywhere.
- You can use the *Search Live* **widget** in your sidebars.
- Supports Custom Post Types.

*Search Live* can show instant search results including thumbnails and short descriptions or manual excerpts.
Among other useful options, you can determine the number of results shown and whether to search in any combination
of titles, excerpts or contents. These can be determined individually for each instance of *Search Live's* shortcode
or widget.

*Search Live* supplies results from posts, pages and other public post types.
We're working on an extended version that provides enhanced features and support for taxonomies.

### Feedback ###

Feedback is welcome!

If you need help, have problems, want to leave feedback or want to provide constructive criticism, please do so here at the [Search Live](http://www.itthinx.com/plugins/search-live/) plugin page.

Please try to solve problems there before you rate this plugin or say it doesn't work. There goes a _lot_ of work into providing you with quality plugins!

Please help with your feedback and we're also grateful if you help spread the word about this plugin.

**Thanks!**

#### Twitter ####

Follow [@wpsearchlive](https://twitter.com/wpsearchlive) for updates on this plugin.
Follow [@itthinx](http://twitter.com/itthinx) on Twitter for updates on this and other plugins.

== Installation ==

You can install this plugin directly from your WordPress Dashboard. Go to **Plugins > Add New**, search for <em>Search Live</em> and install the plugin by *itthinx*. Alternatively, you can install the plugin manually:

1. Go to *Plugins > Add New > Upload* and choose the plugin's zip file, or extract the contents and copy the `search-live` folder to your site's `/wp-content/plugins/` directory.
2. Enable the plugin from the *Plugins* menu in WordPress.
3. Review the settings under the *Search Live* menu. Please refer to the documentation on how to deploy the `[search_live]` shortcode or the *Search Live* widget.

== Frequently Asked Questions ==

= Where is the documentation? =

Please go to the [Documentation](http://docs.itthinx.com/document/search-live/) page.

= I have a question, where do I ask? =

Please ask on the [Search Live](http://www.itthinx.com/plugins/search-live/) plugin page.

== Screenshots ==

Please visit [Search Live](http://www.itthinx.com/plugins/search-live/) and its [documentation](http://docs.itthinx.com/document/search-live/) pages.

1. Search Live Example

== Changelog ==

= 1.3.3 =

* Added support for string translations using WPML for configurable strings in the Search Live widget.
* Fixed the translation context of the submit button label.

= 1.3.2 =

* Added the Text Domain and Domain Path in the plugin header.
* Replaced uses of the SEARCH_LIVE_PLUGIN_DOMAIN constant with 'search-live'.

= 1.3.1 =

* Fixed: disable WPML filter by language based on option for widget and shortcode.

= 1.3.0 =

* Added support for custom post types.
* Tested with WordPress 4.4.1.

= 1.2.2 =

* Fixed: posts_where filter affecting queries on the admin side.

= 1.2.1 =

* Improvement: added CSS rule to make screen reader text invisible where themes don't already do it.
* Improvement: adopted a 98% standard width for the search field which makes more sense (also with popular themes).

= 1.2.0 =

* Improvement: Added the option to change the length of descriptions.

= 1.1.0 =

* Improvement: Now also caching result entries (besides query results).
* Improvement: Building descriptions from content when manual excerpts are empty.
* Fixed: Main settings weren't saved.

= 1.0.0 =

* Initial release.

== Upgrade Notice ==

= 1.3.3 =

This release adds support for additional string translations using WPML for configurable strings in the Search Live widget.
