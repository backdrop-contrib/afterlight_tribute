Afterlight Tribute
--------

Afterlight Tribute is a monochromatic blog theme with an option for a full-screen background image.  It is a simple blank canvas theme.

- this theme is based on the popular, open-source Wordpress theme Afterlight.

- novices can edit the css/style.css file to alter the appearence of your website.

- or front end developers can use the libSASS, liveReload, NPM and Grunt built-in tools for a styling workflow

- novices can use the Responsive Menus or Mobile Navigation modules (downloaded separately) for dropdown or mobile-friendly main menu.

- or front end developers can theme their own menus without needing to un-theme existing menu CSS

- sliders, custom fonts and other theme features do not come with this theme and you are encouraged to incorporate separate modules for each page feature that you wish to have.

- a blog or organization that wishes to be seen as stylish is a good example of how to use this theme.

- a traditional/blue-chip type business is probably not a good fit for this theme.

- this theme contains checkboxes to serve base style/script files from your site or from Cloudflare CDN

- this theme contains checkboxes to serve modernizr script for browser feature detection, jquery-validate for form validation, fastclick for mobile tapping, and hammer for touch based events.  You must provide the custom integration for each.

- this theme contains easy UI background-image settings for Juiced layouts.

- You can change your website colours from this theme's settings page using the Color module.  (Though it is actually faster/more accurate just to edit the style.css or Sass files).  To use this functionality, enable the Color module on your website. Edit your theme .info file to remove the semi-colons from the stylesheets[all][] lines.  Finally, visit your theme settings page, select your colours, and hit save.  Because this is not a priority for all sites and we only have so much time, if you see an error while using this feature please raise an issue on https://github.com/backdrop-contrib or @biolithic and we will get to fixing it.

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Coming From Drupal?
 - Javascript Usage
 - Advanced Usage
 - File Structure
 - SASS
 - Questions
 - License
 - Maintainers


TESTED
-----

This theme is under heavy reconstruction and production usage is not recommended at this time.  Estimated production release is 2/2016.
A former version of this theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop with the Mobile Navigation, Webform and Responsive Menus modules.

http://dev-backdropthemes.pantheon.io/afterlight-tribute

http://dev-backdropthemes.pantheon.io/demo-afterlight-tribute

http://dev-backdropthemes.pantheon.io/admin/appearance/styleguide/afterlight_tribute

KNOWN ISSUES
---------------------

NOTE -- this theme is somewhat stable but being developed state.  If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

SPECIAL THANKS
--------------

This theme is based on of Xtheme for Drupal. <https://www.drupal.org/project/xtheme>
Special thanks to <https://www.drupal.org/u/frankbaele> for this great work!

This theme is based on Afterlight by Automattic. <https://wordpress.com/themes/afterlight>
Special thanks to them for this great work!

This theme uses the PureCSS CSS toolkit from Yahoo!
Special thanks to the developers at Yahoo! for this great work!
This theme is not affiliated with Yahoo! or the PureCSS developers or Automattic in any way.

You may extend this theme with the documentation/classes from http://purecss.io

"Pure plays well with other libraries, including Bootstrap and jQuery. As a developer, you can pull in Pure as a foundational CSS framework, and then include specific Bootstrap or jQuery modules that your application may require."

This theme can use the Bourbon/Neat SASS extensions from thoughtbot (disabled by default).
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

COMING FROM DRUPAL?
-------------------

If you are using Backdrop and have a previous knowledge of Drupal, you will notice that Drupal themes spend a lot of template files and CSS arranging things on the page where this theme doesn't so much.  This theme is more of a style guide of how page elements are supposed to look and not much layout.  It relies on the layouts module.

This theme does not use the PureCSS grid or any grid by default -- it relies on the Layout module to provide that.

JAVASCRIPT USAGE
------------------

If you would like to add custom Javascript to your site, edit the js/scripts.js file.

ADVANCED USAGE
------------------

FILE STRUCTURE
------------------

Overall file structure

- The .info file is for the listing of files to incorporate into your theme.
- The color folder is for the Color module UI.  Probably not important to alter.
- The CSS folder contains the style.css file you should use, which is the file that gets loaded on every page.  It gets overriden by SASS if you use SASS.
- The JS folder contains the scripts.js file you should use, which is the file that gets loaded on every page.
- The images folder is for your images and icons.
- The SASS folder is for your SASS CSS partials.
- Template.php contains PHP functions that alter the HTML of your Backdrop site.
- config.rb contains settings if you are using SASS Compass
- Gruntfile.js and package.json contain settings if you are using libSASS
- If you are not aware, the sass and node_modules folders do not need to be on the live server.  They are for local development only.

SASS file structure

This theme is in the process of retro-fitting its CSS into SASS.
We are in the process of converting from random code from different places into following:
<http://www.sitepoint.com/architecture-sass-project/>
<http://sass-guidelin.es/>

This file organization is described as such:

- style partial is where you can choose/add/remove which partials get added to the final overall CSS file
- print partial is not used by default but would contain styles for viewing printed copies of your website
- wysiwyg partial is not used by default but would contain styles for the rich text editors of your website

BASE FOLDER
- normalize and typography partials for people to work on the typography of the website

HELPERS FOLDER
- variables partial for people to work on the overall settings/defaults of the website
- extendables, functions, and mixins partials for people to work on the theming functions of the website

DESIGN FOLDER
- layout partial for people to work on the big picture and layout aspects of the website
- components partial for people to work on the atomic design, buttons, and small aspects of the website
- navigation partial for people to work on the header and footer of the website
- colors partial for people to work on the colors of the website

PAGES FOLDER
- partials for people to work on admin or authenticated user pages of the site which aren't public facing

THEMES FOLDER
- partials for people to work on different themes of the website (seasonal, regional, etc)


USAGE
-----

SASS
-----

This theme can also use SASS for theming workflow.
The primary way to get started is by using NodeJS in your command line/terminal.

- NodeJS and NPM

Install and download NodeJS at: http://nodejs.org/ if you have already not done so on your computer for any other task.

- Grunt

Install and download Grunt on your command line: npm install -g grunt-cli if you have already not done so on your computer for any other task.

After you have those two dependencies working on your computer, use the command line to enter the root of your theme.

In the root of the theme, type

npm install

to install the SASS tools for this theme.

To enable livereload for development purposes, uncomment a line starting with this in the middle of your template.php file:
// backdrop_add_js("document.write('<script src=\"http://' + (location.host

After this has installed, use these commands on the command line in the root of your theme to make the theme do its thing:

Grunt tasks
---------------------
- grunt sass

compile the sass files

- grunt watch

start watching for changes you make to your files and on save automatically reload the page in your localhost.

- grunt prod

compile the theme for production

Compass compile
---------------------

You can also compile this theme with compass or ruby just install the following gems

gem install sass
gem install compass
gem install bourbon
gem install neat


Questions?
----------

Do you represent some code or project mentioned or used here and feel that this does not represent you correctly?
Let us know and the maintainer will happy to work with you or field your request, even taking this project down.

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

Maintainers
-----------

- biolithic, seeking

Ported to Backdrop by:

- biolithic <https://github.com/biolithic>
