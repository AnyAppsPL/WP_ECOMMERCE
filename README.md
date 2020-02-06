FOR DEVELOPERS
==============

1. Change storefront_boilerplate to project name in packege.json
2. Add below scripts to package.json
* "prod": "webpack --config webpack.config.prod.js",
* "dev": "webpack --config webpack.config.dev.js",
* "dev:watch": "npm run dev -- --watch"

---
###Create package.json
npm init

---
###Install webpack and webpack-cli
npm i -D webpack webpack-cli

---
###Install css loader
npm i -D css-loader 

---
###Install sass loader
npm i -D sass-loader  
npm i -D node-sass

---
###Install minifier
npm i -D mini-css-extract-plugin

---
###Install cleaner
npm i --save-dev clean-webpack-plugin 

---
###Create config files for prod and dev environment
If you want to name those files different than `webpack.config.prod.js` and `webpack.config.dev.js`
you have to change them in package.json scripts

DEV

```const path = require('path');
 const {CleanWebpackPlugin} = require('clean-webpack-plugin');
 const MiniCssExtractPlugin = require('mini-css-extract-plugin');
 
 module.exports = {
     mode: "development",
     entry: {
         main: './wp-content/themes/anyapps_pl/src/index.js',
     },
     output: {
         filename: "[name].js", //utworzy plik o nazwie "application" jak wyżej
         path: path.resolve(__dirname,'./wp-content/themes/anyapps_pl/','js')
     },
     module: {
         rules: [
             {
                 test: /\.(sass|scss)$/,
                 use: [ MiniCssExtractPlugin.loader,'css-loader','sass-loader']
             },
         ]
     },
     plugins: [
         new CleanWebpackPlugin(),
         new MiniCssExtractPlugin({
             filename: '../css/[name].css'
         })
     ]
 
 };
```

PROD

```
const path = require('path');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: "production",
    entry: {
        main: './wp-content/themes/anyapps_pl/src/index.js',
    },
    output: {
        filename: "[name].js", //utworzy plik o nazwie "application" jak wyżej
        path: path.resolve(__dirname,'./wp-content/themes/anyapps_pl/','js')
    },
    module: {
        rules: [
            {
                test: /\.(sass|scss)$/,
                use: [ MiniCssExtractPlugin.loader,'css-loader','sass-loader']
            },
        ]
    },
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: '../css/[name].css'
        })
    ]

};
```



