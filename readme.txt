=== Time2Read ===
Contributors: Lucas Zallio
Donate link: http://ele-zeta.com.ar/
Tags: post, average, read, time
Requires at least: 1.2
Tested up to: 2.5
Stable tag: 1.0

This plugin calculates the average time a normal user will take to read an article. 

== Description ==

This plugin calculates the average time a normal user will take to read an article. 
It's very useful in those cases the article is not being displayed at the full size in the homepage.
The plug-in accept string templates so it can be easily personalized.


== Installation ==

You can enjoy this plugin following the instructions:

1. Upload `time2read.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the callback tag to display the average time to read.

`<? time2read ( [before string] , [divider string], [after string], [”minutes”/”seconds” string) ?>`

Examples:

`<? time2read("Average time to read",":"," minutes aprox.","minutes"); ?>`

This callback will display: Average time to read 3:20 minutes aprox.

`<? time2read("Average time to read",":"," seconds aprox.","seconds"); ?>`

This callback will display: Average time to read 200 seconds aprox.


== Frequently Asked Questions ==

= Why it could be interesting to my readers =

In these days there's not enough time to read everything we want. So it's important that indicates the user how much time he will need to read the full article to bookmark it and reading when time is available.

= Where do you recommend to place the time2read information =

As a user, I'd like to see it right below the title. So I know how long it will take me to read the article even before the excerpt

= Can I use html tags =

Yes, you can place html tags within before and after parameters of the function.

== Screenshots ==

N/A