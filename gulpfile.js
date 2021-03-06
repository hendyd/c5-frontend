const { src, dest, watch, series, parallel } = require('gulp');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const include = require('gulp-include');
const changed = require('gulp-changed');
const browserSync = require('browser-sync').create();
const babel = require('gulp-babel');
require('dotenv').config();

const paths = {
    assets: './assets',
    styles: './src/scss/**/*.scss',
    stylesCompile: './src/scss/site.scss',
    scripts: './src/js/**/*.js',
    scriptsCompile: './src/js/site.js',
    dist: './dist'
};

// BrowserSync Serve
function browserSyncServe(cb) {
    browserSync.init({
        proxy: {
            target: "127.0.0.1:8888",
            proxyRes: [
                function(proxyRes, req, res) {
                    console.log(proxyRes.headers);
                }
            ]
        },
        watch: true
    });
    cb();
}

// BrowserSync Reload
function browserSyncReload(cb) {
    browserSync.reload();
    cb();
}

// Build Styles
function buildStyles() {
    return src(paths.stylesCompile)
        .pipe(changed(paths.dist))
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed',
            includePaths: [
                'node_modules'
            ]
        }).on('error', sass.logError))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.dist));
}

// Build Scripts
function buildScripts() {
    return src(paths.scriptsCompile)
        .pipe(changed(paths.dist))
        .pipe(babel({
            presets: [
                '@babel/preset-env'
            ]
        }))
        .pipe(sourcemaps.init())
        .pipe(include({
            includePaths: [
                'node_modules'
            ]
        })).on('error', console.log)
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.dist));
}

function copyAssets() {
    return src([
        paths.assets + '/**/*'
    ])
    .pipe(dest(paths.dist));
}

// watch
function watchTask() {
    watch(
        [
            paths.styles,
            paths.scripts,
            "./**/*.php"
        ],
        series(
            buildStyles,
            buildScripts,
            copyAssets,
            browserSyncReload
        )
    );
}

exports.default = parallel(
    buildStyles,
    buildScripts,
    copyAssets,
    browserSyncServe,
    watchTask
);

exports.build = series(
    buildStyles,
    buildScripts,
    copyAssets
);
