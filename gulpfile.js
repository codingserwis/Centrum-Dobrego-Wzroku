var gulp = require('gulp'),
	browserSync = require('browser-sync'),
	sass = require('gulp-sass'),
	sourceMaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify');

// Configure auto reload task
gulp.task('browser-sync', function(){
	var files = [
		'./*.php',
		'template-parts/**/*.php',
		'./style.css',
		'./js/*.js'
	];

	browserSync.init(files, {
		proxy: 'http://localhost/cdb/'
	});

});

// Configure Sass task
gulp.task('sass', function(){
	return gulp.src("sass/**/*.scss")
        .pipe(sourceMaps.init())
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(sass({
         	errLogToConsole: true,
         	outputStyle: 'compressed', 
         	sourceComments: false, 
        }).on('error', sass.logError))
       	.pipe(sourceMaps.write('./'))
        .pipe(gulp.dest("./assets/css/"))
        .pipe(browserSync.stream());
});

// JS minification
gulp.task('min', function() {
	return gulp.src('js/**/*.js')
		.pipe(uglify())
		.pipe(gulp.dest('assets/js/'));
});

gulp.task('default', ['browser-sync', 'sass'], function(){
	gulp.watch('sass/**/*.scss', ['sass']);
});