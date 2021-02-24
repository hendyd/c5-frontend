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
require('dotenv').config();

const paths = {
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
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(paths.dist));
}

// Build Scripts
function buildScripts() {
    return src(paths.scriptsCompile)
        .pipe(changed(paths.dist))
        .pipe(sourcemaps.init())
        .pipe(include()).on('error', console.log)
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
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
            browserSyncReload
        )
    );
}

exports.default = parallel(
    buildStyles,
    buildScripts,
    browserSyncServe,
    watchTask
);

exports.build = series(
    buildStyles,
    buildScripts
);
