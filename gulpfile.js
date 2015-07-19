var gulp = require('gulp');
var less = require('gulp-less');
var minify_css = require('gulp-minify-css');
var watch = require('gulp-watch');

function compile_and_compress_less()
{
	var l_dest_dir = "./css";
	var l_src_dir = "./less/**/*.less";

	return (gulp.src(l_src_dir)
				.pipe(less())
				.pipe(minify_css())
				.pipe(gulp.dest(l_dest_dir)));
}

gulp.task("compile_and_compress_less", function()
		{
			return (compile_and_compress_less());
		});

gulp.task("default", ["compile_and_compress_less"]);