var gulp = require('gulp');
var cache = require('gulp-cache')
var imagemin = require('gulp-imagemin');
var imageminJpegtran = require('imagemin-jpegtran');
const imageminPngquant = require('imagemin-pngquant');
var include = require("gulp-include");
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

gulp.task('sass', function () {
    return gulp.src('assets/scss/project.scss')
        .pipe(sass()) 
        .pipe(rename('project.min.css'))
        .pipe(gulp.dest('assets/css/'));

});

gulp.task('minify-js', function () {
    return gulp.src("assets/js/project.js") 
        .pipe(include())
        .pipe(uglify())
        .pipe(rename('project.min.js'))
        .pipe(gulp.dest('assets/js/'));
});

gulp.task('images', function () {
    return gulp.src('assets/images/**/*.+(png|jpg|jpeg|gif|svg)')
        .pipe(cache(imagemin({
            interlaced: true,
            progressive: true,
            optimizationLevel: 5,
            svgoPlugins: [{ removeViewBox: true }]
        })))
        .pipe(gulp.dest('assets/images'));
});

gulp.task('watch', ['sass', 'minify-js', 'images'], function () {
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch(['assets/js/**/*.js', '!assets/js/project.min.js'], ['minify-js']);
});