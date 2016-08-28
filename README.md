# bokskar-app
Bokskar Website

## Installation

Although some steps might seem pretty obvious, they are included so the latest members added to the team can just follow them and hit the ground running in no time.

You will first need to navigate to the folder where you will have your application using the command line in either Linux, Mac or Windows. In case you're in Windows you'll need to install a program like [Cygwin](https://www.cygwin.com/).

If you don’t have [git](http://git-scm.com/), [node.js](http://nodejs.org/), and [npm](https://www.npmjs.org) installed already, go ahead and install them.

Then, you'll need [Yeoman](http://yeoman.io), which is a toolset that contains three main components: Grunt, Bower and the scaffolding tool [Yo](https://github.com/yeoman/yo). Yo will generate the boilerplate code with the help of generators (which are just scaffolding templates) and automatically configures Grunt and Bower for your project.

Go to the command line and run the following command to install the tools of Yeoman:

    npm install -g yo grunt-cli bower

Then you'll have to install the AngularJS generator:

    npm install -g generator angular

## Scaffold the AngularJS application now

Make sure you're in the correct folder where you want your application using the ```pwd``` command from the command line.

Run then

    yo angular

You’ll be presented with some options, such as whether or not to include [Bootstrap](http://getbootstrap.com) and [Compass](http://compass-style.com). For now, let’s say *no* to Compass and *yes* to Bootstrap. Then, when prompted about which modules to include (resource, cookies, sanitize and route), you’ll select only ```angular-route.js```.

A little bit later, maybe a minute or so, your project scaffold should now be created and should include [Karma](http://karma-runner.github.io/0.12/index.html), which is Google's JavaScript test runner and thus the natural choice fror testing AngularJS. Although Karma is *test framework agnostic*, the recommendation is that you use it with [Jasmine](http://jasmine.github.io/2.0/introduction.html).

So, let's add ```karma-jasmine``` to the project now:

    npm install karma-jasmine --save-dev

And if you want your tests executed on a Chrome instance, also add ```karma-chrome-laucher```:

    npm install karma-chrome-launcher --save-dev

So, if you did everything right, our project file tree now should now look like this:

    v bookskar-app
      > app
      > node-modules
      > test
      .bowerrc
      .editorconfig
      .gitattributes
      .gitignore
      .travis.yml
      bower.json
      Gruntfile.js
      karma-e2e.conf.js
      karma.conf.js
      package.json
      README.md

Your static application code goes into the ```app/``` directory and the ```test/``` directory will contain your tests. The files you see on the root are your project configuration files. There’s a lot to be learned about each one of them, but for now you’ll just stick with the default configuration. So run your app for the first time, which you can do simply with the following command:

    grunt serve

Yes, your application whould now just pop up in your default web browser tight in front of you.

## A little bit of information about Bower

**Bower** is your package manager. Adding a lib or plugin to your project can simply be done using the ```bower install``` command. For example, to include ```modernizr```, all you need to do is the following (within your project directory, of course):

    bower install modernizr

While that's really cool and simple, by including ```modernizr``` as part of your project (it will be located in the ```app/bower_components``` directory), *you're still responsible for including it in your application*, the same way you would need to add any other manually added lib. Most likely you will be using a ```<script>``` tag in your ```index.html``` file:

    <script src="bower_components/modeernizr/modernizr.js"></script>

The other recommended scenario would be to use the ```bower.json``` file to manage your dependencies. After carefully following every step so far, your ```bower.json``` file should look like this:

```json
{
  "name": "bokskar",
  "version": "0.0.0",
  "dependencies": {
    "angular": "^1.4.0",
    "bootstrap": "^3.2.0",
    "angular-route": "^1.4.0"
  },
  "devDependencies": {
    "angular-mocks": "^1.4.0"
  },
  "appPath": "app",
  "moduleName": "bokskarApp",
  "overrides": {
    "bootstrap": {
      "main": [
        "less/bootstrap.less",
        "dist/css/bootstrap.css",
        "dist/js/bootstrap.js"
      ]
    }
  }
}
```

The sintax is fairly self-explanatory. Any additional new dependencies you want, just add them with the command to install them:

    bower install 'dependency-you-want-to-install'
