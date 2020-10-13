var gulp = require('gulp');
var sass = require('gulp-sass');
var uglifycss = require('gulp-uglifycss');
var rename = require('gulp-rename');

sass.compiler = require('node-sass');



gulp.task('sass', function () {
    return gulp.src('./styles/scss/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(rename("style.css"))
      .pipe(gulp.dest('./'));
  });
   
  gulp.task('sass-watch', function () {
    gulp.watch('./styles/scss/**/*.scss', gulp.series('sass'));
  });

  gulp.task('css', function () {
    return gulp.src('./style.css')
      .pipe(uglifycss({
        "maxLineLen": 80,
        "uglyComments": true
      }))
      .pipe(gulp.dest('./style.min.css'));
  });
