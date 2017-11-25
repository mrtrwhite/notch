var webpack = require('webpack');
var dotenv = require('dotenv').config();
var path = require('path');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

var paths = {
    'js': {
        'entry': './wp-content/themes/' + process.env.WP_THEME + '/assets/js/main.js',
    },
    'sass': {
        'entry': './wp-content/themes/' + process.env.WP_THEME + '/assets/sass/main.scss',
    },
    'output': './wp-content/themes/' + process.env.WP_THEME + '/inc/'
}

module.exports = {
    entry: [
        paths.js.entry,
        paths.sass.entry
    ],
    output: {
        path: path.resolve(__dirname, paths.output),
        filename: 'js/bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/,
                loader: ExtractTextPlugin.extract(['css-loader', 'sass-loader'])
            },
            {
                test: /\.js$/,
                loader: 'babel-loader',
				query: {
					presets: ['es2015']
				}
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin({
            filename: 'css/app.css',
            allChunks: true
        }),
    ],
}
