/* package */
const gulp = require("gulp");
const sass = require("gulp-sass");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const sassGlob = require("gulp-sass-glob");
const mmq = require("gulp-merge-media-queries");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");

/* default value */
const themeName = "base-template-wp"; // WordPress theme name
const srcSass   = "./sass/**/*.scss"; // sass src path
const distCss   = `./${themeName}/assets/css`; // css output path

/* compile sass */
gulp.task("sass", function() {
	return gulp
		.src(srcSass)
		.pipe(plumber({ // error message
			errorHandler: notify.onError("Error: <%= error.message %>")
		}))
		.pipe(sassGlob()) // glob import path
		.pipe(sass({ // sass option
			outputStyle: "expanded"
		}))
		.pipe(postcss([autoprefixer({ // autoprefixer
			grid: true
		})]))
		.pipe(postcss([cssdeclsort({ // sort
			order: "alphabetical"
		})]))
		.pipe(mmq()) // media query mapper
		.pipe(gulp.dest(distCss));
});

gulp.task("watch", function(done) { // task watch
	gulp.watch(srcSass, gulp.task("sass"));
});

gulp.task("default", gulp.series(gulp.parallel("watch"))); // default
