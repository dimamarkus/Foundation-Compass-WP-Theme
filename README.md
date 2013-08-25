This theme takes the standard WordPress TwentyThirteen theme and adds Foundation and Compass when used with CodeKit.

Drag this project into CodeKit and it should pick up the Compass `config.rb` file thats in the themes root directory. Besides configuring Compass, this file also includes a small Ruby script (courtesy of chris coyer) that copys the compiled `style.css` out of the CSS folder and back into the theme's root directory.

Foundation is a Sass file in the `scss` folder and a series of JavaScript files which are in the `js` folder.

All the scripts in the `js/vendor` folder are required for foundation to function.

If you want to customize which funcationality of Foundation you want to turn on or off, you can do that in the `my-functions` file in the theme root. Just uncomment any feature you want to enable.  

Also a `$(document).foundation();` script is called right before the footer to intialize Foundation.