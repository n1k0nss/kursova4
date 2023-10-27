const fs = require('fs');
const SVGSpite = require('svg-spritemap-webpack-plugin');
const path = require('path');

module.exports = (mix) => {
    const pathjs = 'resources/assets/js/pages';
    const pathcss = 'resources/assets/scss/pages';

    mix.setPublicPath(path.normalize('public'));
    mix.webpackConfig({
        resolve: {
            alias: {
                '@node': path.resolve(__dirname, 'node_modules'),
                '@': path.resolve(__dirname, 'resources/assets/js/'),
                '@scss': path.resolve(__dirname, 'resources/assets/scss'),
                '@base': path.resolve(__dirname, 'resources/assets/scss/base'),
                '@components': path.resolve(__dirname, 'resources/assets/scss/components'),
                '@header': path.resolve(__dirname, 'resources/assets/scss/layouts/header'),
                '@footer': path.resolve(__dirname, 'resources/assets/scss/layouts/footer'),
                '@pages': path.resolve(__dirname, 'resources/assets/scss/pages'),
                '@ui': path.resolve(__dirname, 'resources/assets/scss/ui'),
                '@globals': path.resolve(__dirname, 'resources/assets/scss/global-styles.scss'),
            }
        },
    });
    mix.webpackConfig({
        plugins: [
            new SVGSpite('./resources/assets/img/*.svg', {
                output: {
                    filename: './img/sprite.svg',
                    chunk: {
                        keep: true,
                    },
                },
                sprite: {
                    prefix: false,
                }
            }),
        ]
    });
    mix.version(["public/img/sprite.svg"]);

    fs.readdirSync(pathjs, { withFileTypes: true }).map(directory => {
        const path = !directory.name ? directory : directory.name;
        mix.js(`${pathjs}/${path}/index.js`, `public/js/${path}.js`)
    });
    fs.readdirSync(pathcss, { withFileTypes: true }).map(directory => {
        const path = !directory.name ? directory : directory.name;
        mix.sass(`${pathcss}/${path}/index.scss`, `public/css/${path}.css`);
    });
}
