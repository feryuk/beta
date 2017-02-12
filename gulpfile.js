const gulp = require('gulp');

var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var minify = require('gulp-clean-css');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var ts = require('gulp-typescript');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var pump = require('pump');


function onError(err) {
    console.log(err);
}



gulp.task('sassmin', function () {
    return gulp.src('./wp-content/themes/edbf/dev/scss/style.scss')
        .pipe(sass())
        .pipe(prefix('last 12 versions'))
        .pipe(minify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./wp-content/themes/edbf/'))
        .pipe(plumber({
            errorHandler: onError
        }))
});

//
// gulp.task('sassminplugin', function () {
//     return gulp.src('./wp-content/themes/edbf/dev/scss/style.scss')
//         .pipe(sass())
//         .pipe(prefix('last 12 versions'))
//         .pipe(minify())
//         .pipe(rename({suffix: '.min'}))
//         .pipe(gulp.dest('./wp-content/themes/edbf/'))
//         .pipe(plumber({
//             errorHandler: onError
//         }))
// });

gulp.task('typescript', function () {
    return gulp.src('./wp-content/themes/edbf/dev/ts/search.ts')
        .pipe(ts({
            noImplicitAny: true,
            out: 'main.js',
            module: 'amd'
        }))
        .pipe(gulp.dest('./wp-content/themes/edbf/js/test/'));
});

// concat javascript files
gulp.task('concatscripts', function () {
    return gulp.src(['./wp-content/themes/edbf/dev/vendors/bootstrap/bootstrap/dist/js/bootstrap.js', './wp-content/themes/edbf/js/main-compiled.js', './wp-content/themes/edbf/dev/js/*.js'])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./wp-content/themes/edbf/js/'))
        .pipe(rename('main.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./wp-content/themes/edbf/js/'));
});




gulp.task('compress', function (cb) {
    pump([
            gulp.src('./wp-content/themes/edbf/js/main.js'),
            uglify(),
            gulp.dest('./wp-content/themes/edbf/js/')
        ],
        cb
    );
});



gulp.task('sass:watch', function () {
    gulp.watch('./wp-content/themes/edbf/dev/scss/**/*.scss', ['sass', 'sassmin']);
});

gulp.task('ts:watch', function () {
    gulp.watch('./wp-content/themes/edbf/dev/ts/**/*.ts', ['typescript']);
});


gulp.task('js:watch', function () {
    gulp.watch(['./wp-content/themes/edbf/**/*.js'], ['concatscripts', 'compress']);
});

gulp.task('default', ['sass:watch', 'ts:watch', 'js:watch']);



