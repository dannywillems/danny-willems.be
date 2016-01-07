/*----------------------------------------------------------------------------*/
/* Variables for files */
var less_files = ["!less/variables.less", "!less/mixins.less", "./less/*.less"];
var css_dir = "css/";
/*----------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------*/
/* Dependancies */
var gulp = require('gulp');
var less = require('gulp-less');
var minify_css = require('gulp-minify-css');
var watch = require('gulp-watch');
/*----------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------*/
/* Functions for tasks */
function compile_and_compress_less()
{
	return (gulp.src(less_files)
				.pipe(less())
				.pipe(minify_css())
				.pipe(gulp.dest(css_dir)));
}

function fn_watch()
{
    gulp.watch(less_files, ["compile_and_compress_less"]);
}
/*----------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------*/
/* Tasks */
gulp.task("compile_and_compress_less", compile_and_compress_less);
gulp.task("watch", fn_watch);

gulp.task("default", ["compile_and_compress_less"]);
/*----------------------------------------------------------------------------*/
