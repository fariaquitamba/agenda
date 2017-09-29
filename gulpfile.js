var gulp = require('gulp');
var postcss = require('gulp-postcss');
gulp.task('postcss', function(){
	return gulp.src('./style.css')
		.pipe(postcss([]))
		.pipe(gulp.dest('./prod'));
});