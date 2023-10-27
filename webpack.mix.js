const mix = require('laravel-mix');
const website = require('./webpack.site.js');

mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.scss$/,
                loader: "sass-loader",
                options: {
                    additionalData: `
                       @import './resources/assets/scss/helpers/mixins.scss';
                    `
                }
            },
        ]
    },
});

if (mix.inProduction()) {
    mix.version();
}

process.env.PART === 'admin' ?  admin(mix) : website(mix);

mix.browserSync({
    proxy: process.env.APP_URL,
    host: process.env.APP_HOST,
    open: 'external'
});

