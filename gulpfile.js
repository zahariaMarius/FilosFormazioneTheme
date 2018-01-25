const path = require('path');

/* GULP */
const gulp = require('gulp');
const gutil = require('gulp-util');
const plumber = require('gulp-plumber');
const gulpif = require('gulp-if');
const rename = require('gulp-rename');
const pipePrint = require('gulp-print');
const sourcemaps = require('gulp-sourcemaps');

/* CSS */
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('autoprefixer');

/* Other */
const del = require('del');
const argv = require('yargs').argv;

/* Command Line Arguments */
const production = argv.prod || false;

/* Error Handling Functions */
const onError = (err) => {
  var errorElements = ['plugin', 'file', 'fileName', 'line', 'lineNumber'];
  gutil.log('*********************************************');
  gutil.log(gutil.colors.bgRed.white('Compilation error.'));
  errorElements.forEach(function(el) {
    if (err.hasOwnProperty(el)) {
      gutil.log (gutil.colors.red.bold(el.toUpperCase() + ': ', err[el]));
    }
  });
  gutil.log ('\n' + gutil.colors.red(err.stack || err.message));
}

/* Utilities */
const postCssPlugins = [
	autoprefixer({
		browsers: ['> 1%', 'last 2 versions', 'ie > 8']
	})
];

function buildCss() {
	gulp.src('src/css/[^_]*.scss')
    .on('error', onError)
    .pipe(plumber({errorHandler: onError}))
    .pipe(gulpif(!production, sourcemaps.init()))
    .pipe(sass())
    .pipe(postcss(postCssPlugins))
    .pipe(gulpif(production,
      cssnano({
        autoprefixer: false,
        zindex: false
      })
    ))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulpif(!production, sourcemaps.write()))
    .pipe(gulp.dest('css/'))
    .pipe(pipePrint(function (file) {
      return gutil.colors.white.bgCyan.bold(' ✚ CSS    ') + '\t' + file;
    }))
}

function watchCss() {
	buildCss();
	gulp.watch('src/css/**/*.scss', buildCss);
}

function clearCss() {
	var paths = del.sync('css/*.{map,scss,css}', {force: true});
	paths.forEach(function(file) {
		gutil.log(gutil.colors.bgRed.bold(' ✖ Clear  ') + '\t' + path.relative(__dirname, file));
	});
}

// TASKS - CSS
gulp.task('clear', clearCss);
gulp.task('build', function() {
	clearCss();
	buildCss();
});
gulp.task('watch', function() {
  clearCss();
	watchCss();
});
