
//Gravvvy Gulp Setup file
var autoprefixer 	= require('gulp-autoprefixer'),
		cache         = require('gulp-cache'),
		concat        = require('gulp-concat'),
		connect 			= require('gulp-connect'),
		gulp 					= require('gulp')
		livereload 		= require('gulp-livereload'),
		haml 					= require('gulp-ruby-haml'),
		minifyHtml	 	= require('gulp-minify-html'),
		imagemin      = require('gulp-imagemin'),
		minifycss 		= require('gulp-minify-css'),
		notify        = require('gulp-notify'),
		rename 				= require('gulp-rename'),
		sass 					= require('gulp-ruby-sass'),
		uglify        = require('gulp-uglify');

// Compile Haml into HTML
gulp.task('haml', function() {
  gulp.src('src/views/**/*.haml')
    .pipe(haml().on('error', function(e) { console.log(e.message); }))
    .pipe(gulp.dest('./'))
		.pipe(notify({ message: 'Compile HAML task complete' }))
		.pipe(livereload());
});

gulp.task('minify-index-html', function () {
    gulp.src('index.html') // path to your files
    .pipe(minifyHtml())
    .pipe(gulp.dest('./'))
		.pipe(notify({ message: 'Minify index file -- task complete' }));
});

gulp.task('minify-partials-html', function () {
    gulp.src('partials/*.html') // path to your files
    .pipe(minifyHtml())
    .pipe(gulp.dest('partials'))
		.pipe(notify({ message: 'Minify partials -- task complete' }));
});

gulp.task('scss', function() {
	return sass('src/scss/application.scss', { sourcemap: false })
		.on('error', function (err) { console.log("ERROR: " + err.message); })
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
		.pipe(gulp.dest('css'))
		.pipe(rename({suffix: '.min'}))
		.pipe(minifycss())
		.pipe(gulp.dest('css'))
		.pipe(notify({ message: 'Minify SCSS -- task complete' }))
		.pipe(livereload());
});

gulp.task('mainjs', function() {
	return gulp.src('src/js/application.js')
		.pipe(concat('application.js'))
		.pipe(gulp.dest('js'))
		.pipe(rename({suffix: '.min'}))
		.pipe(uglify().on('error', function(e){
				console.log(e);
		 }))
		 .pipe(gulp.dest('js'))
		 .pipe(notify({ message: 'Compile main javascript -- task complete' }))
		.pipe(livereload());
});

gulp.task('otherjs', function() {
	return gulp.src('src/js/**/*.js')
		.pipe(gulp.dest('js'))
		.pipe(uglify().on('error', function(e){
				console.log(e);
		 }))
		 .pipe(gulp.dest('js'))
		 .pipe(notify({ message: 'Compile other javascript -- task complete' }))
		.pipe(livereload());
});

gulp.task('images', function() {
	return gulp.src('src/img/**/*')
		.pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
		.pipe(gulp.dest('img'))
		.pipe(notify({ message: 'Minify images -- task complete' }))
		.pipe(livereload());
});


gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('src/views/**/*.haml', ['haml']).on('change', livereload.changed);
  gulp.watch('src/scss/**/*.scss', ['scss']).on('change', livereload.changed);
  gulp.watch('src/js/**/*.js', ['mainjs']).on('change', livereload.changed);
	gulp.watch('src/js/**/*.js', ['otherjs']).on('change', livereload.changed);
  gulp.watch('src/img/**/*', ['images']).on('change', livereload.changed);
	livereload.listen();
});

// Kick off
gulp.task('default', ['watch'], function() {
	gulp.start('haml', 'minify-index-html', 'minify-partials-html', 'scss', 'mainjs', 'otherjs', 'images');
});
