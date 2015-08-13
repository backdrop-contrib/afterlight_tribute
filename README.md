PURE CSS
--------

Pure CSS is a basic, black and white, simple blank canvas theme using:

- integration with Pure CSS by Yahoo! for more mobile friendly page elements
- default Backdrop layouts
- some Bartik default CSS
- a single CSS file OR
- SASS stylesheets using libSASS and Grunt for workflow
- integration with either the Mobile Navigation module or Responsive Menus module for dropdown or mobile-friendly main menu.  Sliders, custom fonts and other theme features do not come with this and you are encouraged to incorporate separate modules for each page feature that you wish.

A news site is a good example of how to use this theme.
A children's charity website is probably not a good fit for this theme.

"This theme differentiates itself by its simplicity and structure. It does not incorporate a great list of features but rather embodies a frontend workflow. Many of the existing themes are bloated with features and overwrites. We do not want to rewrite output, just makes it easier to develop a theme in a structured way." - quote from the original developers.

CONTENTS OF THIS FILE
---------------------

 - Introduction
 - Tested
 - Known Issues
 - Special Thanks
 - Requirements
 - Installation
 - Coming From Drupal?
 - Casual Usage
 - Advanced Usage
 - File Structure
 - SASS
 - Questions
 - License
 - Maintainers

TESTED
-----

@todo
This theme has been manually tested successfully creating and viewing nodes and style guide in Backdrop with the Mobile Navigation, Webform and Responsive Menus modules.

KNOWN ISSUES
---------------------

NOTE -- this theme is somewhat stable but being developed state.  If you have spare time and shared ideas on how to propel it forward coding cleanly and under the appropriate licenses, you are welcome to join in and offer advice or build it together.

This theme works as is by just installing it.

If it bothers you that we don't use the Libraries module, file an issue and we can try to change it.

When official information on using third-party frameworks becomes known, this will follow it.

The first big change we will make to this theme when we have time is to run this theme through an "un-css" cleaner and chop out some css (even core) to make this download faster.  A major goal of this theme is to download your pages fast to the end user.

SPECIAL THANKS
--------------

This theme is based on of Xtheme for Drupal. <https://www.drupal.org/project/xtheme>
Special thanks to <https://www.drupal.org/u/frankbaele> for this great work!

This theme uses the PureCSS CSS toolkit from Yahoo!
Special thanks to the developers at Yahoo! for this great work!
This theme is not affiliated with Yahoo! or the PureCSS developers in any way.

You may extend this theme with the documentation/classes from http://purecss.io

"Pure plays well with other libraries, including Bootstrap and jQuery. As a developer, you can pull in Pure as a foundational CSS framework, and then include specific Bootstrap or jQuery modules that your application may require."

This theme can use the Bourbon/Neat SASS extensions from thoughtbot.
Bourbon is maintained and funded by thoughtbot, inc. Tweet your questions or suggestions to @bourbonsass and while you’re at it follow us too.

Copyright © 2011–2015 thoughtbot, inc. Bourbon is free software, and may be redistributed under the terms specified in the license.

REQUIREMENTS
------------

None
@todo

INSTALLATION
------------
- download and install this theme per usual Backdrop themes: <https://backdropcms.org/guide/themes>
- to see how this theme handles all the page elements, use this module <https://github.com/backdrop-contrib/styleguide>

COMING FROM DRUPAL?
-------------------

If you are using Backdrop and have a previous knowledge of Drupal, you will notice that Drupal themes spend a lot of template files and CSS arranging things on the page where this theme doesn't so much.  This theme is more of a style guide of how page elements are supposed to look and not much layout.  It relies on the layouts module.

This theme does not use the PureCSS grid by default.  It uses the default layouts module until layouts in Backdrop become more defined.

CASUAL USAGE
------------------

If you would like to use CSS instead of SASS, edit the css/style.css file to alter the appearence of your website.
Place your custom CSS at the bottom of the file.

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
- Gruntfile.js and package.json contain settings if you are using SASS Grunt

SASS file structure

We are in the process of converting from random code from different places into follwowing:
<http://www.sitepoint.com/architecture-sass-project/>
<http://sass-guidelin.es/>

USAGE
-----

If you would like to use CSS instead of SASS, edit the css/style.css file to alter the appearence of your website.


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

- seeking

Ported to Backdrop by:

 - biolithic <https://github.com/biolithic>
