/**
 * Created by Feri on 01/01/2017.
 */

var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');

function onError(err) {
    console.log(err);
}

gulp.task('sass', function () {
    return gulp.src('./dev/scss/style.scss')
        .pipe(sass())
        .pipe(prefix('last 12 versions'))
        .pipe(gulp.dest('./'))
        .pipe(plumber({
            errorHandler: onError
        }))
});



gulp.task('sass:watch', function () {
    gulp.watch('./dev/scss/**/*.scss', ['sass']);
});



gulp.task('default', ['sass:watch']);