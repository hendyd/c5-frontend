const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const devPlugins = require('./libs/plugins/dev.plugins.js');
const prodPlugins = require('./libs/plugins/dev.plugins.js');
const mode = (process.env.NODE_ENV === 'production') ? 'production' : 'development';
const plugins = (mode === 'development') ? devPlugins : prodPlugins;

module.exports = {
    mode: mode,
    devtool: 'eval-cheap-source-map',
    entry: [
        path.resolve(__dirname, 'src/js/site.js'),
        path.resolve(__dirname, 'src/scss/site.scss')
    ],
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'site.js'
    },
    resolve: {
        alias: {
            Utils: path.resolve(__dirname, 'src/js/utils')
        }
    },
    plugins: plugins,
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                options: {
                    presets: [
                        "@babel/preset-env"
                    ],
                    plugins: [
                        "@babel/plugin-syntax-dynamic-import",
                        "@babel/plugin-proposal-class-properties"
                    ]
                }
            },
            {
                test: /\.(sc|sa|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            url: false
                        }
                    },
                    'postcss-loader',
                    {
                        loader: 'sass-loader',
                        options: {
                            sourceMap: true,
                        }
                    }
                ]
            }
        ]
    }
};
