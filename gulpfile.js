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
    styles: '',
    stylesCompile: '',
    script: '',
    scriptCompile: '',
    dist: './dist'
};

// BrowserSync Serve
function browserSyncServe(cb) {
    browserSync.init({
        watch: true,
        reloadDelay: 1000
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

}

// Build Scripts
function buildScripts() {

}

// watch
function watchTask() {
    watch(
        [
            // paths in here
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
