const {src, dest, series, watch} = require('gulp')
const sass = require('gulp-sass')(require('sass'))
const csso = require('gulp-csso')
const sync = require('browser-sync').create()
const del = require('del')
const autoprefixer = require('gulp-autoprefixer')
const concat = require('gulp-concat')

const scss = () => {
    return src('inc/assets/scss/**.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(csso())
        .pipe(concat('index.min.css'))
        .pipe(dest('inc/css'))
}

const serve = () => {
    watch('inc/assets/scss/**.scss', series(scss)).on('change', sync.reload)
}

const clear = () => del(['inc/css'])

exports.build = series(clear, scss)
exports.default = series(clear, scss, serve)