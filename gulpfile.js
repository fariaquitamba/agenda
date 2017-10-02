var gulp = require('gulp'),
    watch = require('gulp-watch'),
    postcss = require('gulp-postcss');
 	autoprefixer = require('autoprefixer');
 	nested = require('postcss-nested');
gulp.task('stream', function () {
    // Endless stream mode 
    return watch('css/**/*.css', { ignoreInitial: true })
   		.pipe(postcss([nested, autoprefixer]))
        .pipe(gulp.dest('build'));
});
 
