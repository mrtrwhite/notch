var tailwindcss = require('tailwindcss');
var dotenv = require('dotenv').config();

module.exports = {
    plugins: [
        tailwindcss('./wp-content/themes/' + process.env.WP_THEME + '/tailwind-conf.js'),
        require('autoprefixer'),
    ]
}
