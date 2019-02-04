const gulp   		= require('gulp');
const concat 		= require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

gulp.task('serve', function() {
	browserSync.init({
			proxy: "radius.zl"
	});
	browserSync.watch('build',browserSync.reload)
});

gulp.task('sass', function () {
  return gulp.src('./sass/style.sass')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest('./app/css'))
		.pipe(browserSync.stream());;
});


gulp.task('watch', function() {
	gulp.watch("./app/*.php").on('change', browserSync.reload);
	gulp.watch('./sass/**/*.sass', gulp.series('sass'));
});

gulp.task('default', gulp.series(
	gulp.parallel('sass'),
	gulp.parallel('watch','serve')
	));

