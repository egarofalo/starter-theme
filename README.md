# Project

Wordpress Starter Theme integrated with Bootstrap 4 Framework.

## Description

Wordpress Starter Theme, like [\_s](https://underscores.me/), is a base theme to develop themes in Wordpress. It is built using namespaces, which gives us greater flexibility when developing our theme. On the other hand, WordPress Starter Theme is already integrated with Bootstrap 4, therefore you will save the trouble of integrate Bootstrap 4 to the theme. To manage and optimize front-end dependencies, Webpack Encore is used, a Webpack wrapper created by Symfony wich simplifies the use of Webpack.

## Requirements

To start using Wordpress Starter Theme you must ensure that:

-   php >= 7.0
-   Composer
-   Node.js >= 12.x
-   Yarn

## Installation

Install [Composer](https://getcomposer.org/download/) on your computer and after installing run the command <code>composer require co-developers/starter-theme</code> in the root of your wordpress project. Composer will automatically install the starter theme in the <code>wp-content/themes</code> folder.

## The <code>functions.php</code> file

This file takes care of including the external libraries, helpers, and hooks.
In the <code>helpers</code> and <code>hooks</code> folder you will find some <strong>php</strong> files. If you want to create a new hook, you can use one of the files located in the <code>hooks</code> folder or create a new one. The same goes for helpers.
You should consider when you create a new helper or hook file, you must reference it in the <code>$helpers</code> or <code>$hooks</code> array respectively, defined both in the <code>functions.php</code> file.

## Hooks

You can find some hooks defined into the <code>php</code> scripts located in the <code>hooks</code> folder. As mentioned above, your own hooks can be defined in an existing hook file, or you can create new one.

## Helpers

WordPress Starter Theme come with some helper functions wich help you resolve common code problems while you are develope a new theme. Helper files, wich contain helper functions, must have a unique namespace, to avoid coalitions of functions and constants with other files or libraries. Helper files are located in the <code>helpers</code> folder.
As same as hooks, a new helper function can be written in one of the exisiting helper files. If you want, you can create a new file with a unique namespace for avoid coalitions. Helper functions can act as filters or actions, and you can use it inside hook files. Also, you can use a helper function as a template tag. Feel free to create helper functions that you can use in any part of your code.

## Custom Queries

Custom queries can be created inside the <code>query.php</code> helper file as functions. You can call these functions in any part of your code.

## Custom template tags

Template tags can be created inside the <code>template_tags.php</code> helper file, and you can call these functions in any template file.

## Install front-end dependencies

To install front-end dependencies, you must install Yarn, and then run the following command in the theme directory:

-   yarn install

## Compile assets with Webpack Encore

Once the front-end libraries are installed, you must run the <code>yarn dev</code> command in the theme directory to compile the assets. If you want, you can run <code>yarn watch</code> during the development process, since webpack can watch files and recompile whenever they change. Before deploy to production environment, you must run <code>yarn production</code>.

## Help us to skip working in this project

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.paypal.com/donate?hosted_button_id=7GSFA7BVHWDTN)
