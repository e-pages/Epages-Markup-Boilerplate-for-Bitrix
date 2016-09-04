#Epages Markup Boilerplate

##Getting started
1. Initially you should download and install [node.js](https://nodejs.org/).
    To check is node installed type in command line
    ```bash
    node -v
    ```
2. Then install Gulp globally by using following command in the command line:
    ```bash
    npm i gulp -g
    ```
3. Install node packages into project directory by using the following command:
    ```bash
    npm i
    ```
4. Install Bower globally on your system by using the following command:
    ```bash
    npm i bower -g
    ```
5. Install bower components by using the following command in the command line:
    ```bash
    bower i
    ```
6. Start working on project after executing of next gulp tasks (this task copy all necessary files):
    ```bash
    gulp init
    ```
    ```bash
    gulp
    ```
Last task will watch for changes in main and components scss files
#### Additional tasks:
- make sprite:
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
