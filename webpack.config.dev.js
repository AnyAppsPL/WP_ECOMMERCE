const path = require('path');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    mode: "development",
    entry: {
        main: './wp-content/themes/anyapps_pl/src/all.js',
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
