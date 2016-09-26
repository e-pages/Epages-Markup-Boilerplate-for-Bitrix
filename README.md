#Epages Markup Boilerplate

##Getting started

* Install [node.js](https://nodejs.org/).
    To check if node is installed type in command line
```bash
node -v
```
* Install Gulp globally:
```bash
npm i gulp -g
```
* Install node packages (execute in project directory):
```bash
npm i
```
* Install Bower globally on your system by using the following command:
```bash
npm i bower -g
```
* Install bower components (execute in project directory):
```bash
bower i
```
* Start working on project (execute in project directory):
```bash
gulp init
```
```bash
gulp
```
or type in command line (the following command executes `gulp init default` by npm)
```bash
npm start
```

Last task will watch for changes in main and components scss files

#### Additional tasks:

- make sprite _(put sprite images into `img/sprite` directory)_:
```bash
gulp sprite
```
- make sprite, css:
```bash
gulp make:all
```
- watch for changes in styles and sprite
```bash
gulp watch
```

## General principles

### Components

Component consist of:
* markup template (located in `markup/components`)
* [optional] data (located in `markup/data`)
* [optional] default parameters (located in `markup/default-parameters`)

To include component call function includeComponent(string $name, string $dataFilePath = '', array $arParams = array())

In template will be available two php variables:
* `$arParams` - composed of default parameters and parameters passed during function call
* `$arResult` - populated with data from `markup/data/{$dataFilePath}.php`

#### Default parameters

Default parameters for component could be set in two places `markup/default-parameters/.global.php`
 and `markup/default-parameters/[component's name].php`

Component's specific default parameters file is optional.
 
#### Example

`<?php includeComponent('nav/menu', 'menu/simple', ['MODIFIER' => 'green']);?>`

This call means that will be included `markup/components/nav/menu.php` file
with passed into it
* `$arParams` composed of `markup/default-parameters/.global.php`,
`markup/default-parameters/nav/menu.php` _(if exists)_ and `['MODIFIER' => 'green']` _(array passed into function call)_
* `$arResult` populated with data from `markup/data/menu/simple.php`

### Images

Images used in styles should go into `img` directory.

Images used as example content should go into `markup/sample-img` directory.

