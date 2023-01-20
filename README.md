# Starter Theme

**Starter Theme** is essentially a theme boilerplate for SSM projects built on top of [Sage/Roots](https://github.com/roots/sage) (starter theme with a modern development workflow). It is responsible for the *presentable* layer of a project, builds assets and views, uses [Blade templating engine](https://laravel.com/docs/5.7/blade) to render front-end and contains the public presentation of SSMPB entities.

## Main Concepts

- Built on top of [Sage/Roots](https://github.com/roots/sage)
- Contains *presentable* layer of the project
- Gets ACF fields data from controllers and uses it to render frontend UI
- Uses [Blade templating engine](https://laravel.com/docs/5.7/blade) to render views
- Uses [Composer](https://getcomposer.org/) to manage dependencies
- Uses [Yarn](https://yarnpkg.com/en/) to compile assets, optimize images, concatenation / minification
- Uses [SASS](https://sass-lang.com/) as CSS-preprocessor
- Uses [Foundation](https://foundation.zurb.com/) as CSS-framework
- Uses [NPM](https://www.npmjs.com/) as JS package manager

## Installation

1. **Clone** both repositories (SST and empty project repository) to */wp-content/themes/*
	- git clone https://github.com/secretstache/starter-theme
	- git clone [repository_url]
4. **Copy** all the content from one repository to another (including *.gitignore* excluding *.git/*)
	- Naming convention: _**project_code**_year__
6. **cd** to project’s folder
7. **Run** *composer install*
8. **Run** *yarn*
9. **Run** *yarn build*
9. **Activate** the theme
10. **Sync** ACF Field Groups

## Folders Walkthrough

**app/**

- responsible for the basic theme setup

	`Examples:` *admin.php, filters.php, helpers.php*

**config/**

- responsible for the theme configuration

	`Examples:` *assets.php, theme.php, view.php*

**resources/**

- contains assets and presentable UI elements

	`Examples:` *templates/, modules/, assets/*
