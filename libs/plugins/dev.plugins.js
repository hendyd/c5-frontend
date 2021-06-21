const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyPlugin = require('copy-webpack-plugin');
const { getSSLKeyPath, getSSLCertPath } = require('./../utils/ssl');
const { getAvailablePort, getReloadDelay } = require('./../utils/development');

module.exports = [
    new MiniCssExtractPlugin(),
    new CopyPlugin({
        patterns: [
            {
                from: path.resolve(__dirname, 'assets/**/*'),
                to: path.resolve(__dirname, 'dist/assets'),
                noErrorOnMissing: true,
                globOptions: {
                    flatten: false
                }
            }
        ]
    }),
    new BrowserSyncPlugin(
        {
            files: [
                path.resolve(__dirname, 'src/scss/*.scss'),
                path.resolve(__dirname, 'src/js/*.js')
            ],
            watchEvents: [
                "add",
                "change",
                "addDir"
            ],
            port: getAvailablePort(),
            https: {
                key: getSSLKeyPath(),
                cert: getSSLCertPath()
            },
            logLevel: 'silent',
            socket: {
                domain: 'https://localhost:' + getAvailablePort(),
            },
            reloadDelay: getReloadDelay()
        }
    )
]
