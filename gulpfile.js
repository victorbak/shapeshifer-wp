const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const groupmq = require('gulp-group-css-media-queries');
const bs = require('browser-sync');

const SASS_SOURCES = [
  './wp-content/themes/shapeshifter/sass/**/*.scss', // This picks up our style.scss file at the root of the theme
  './wp-content/themes/shapeshifter/css/**/*.scss', // All other Sass files in the /css directory
];

const CSS_DESTINATION = './wp-content/themes/shapeshifter/css/'

/**
 * Compile Sass files
 */
gulp.task('compile:sass', () =>
  gulp.src(SASS_SOURCES)
  .pipe(plumber()) // Prevent termination on error
  .pipe(sass({
    indentType: 'tab',
    indentWidth: 1,
    outputStyle: 'expanded', // Expanded so that our CSS is readable
  })).on('error', sass.logError)
  .pipe(postcss([
    autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false,
    })
  ]))
  .pipe(groupmq()) // Group media queries!
  .pipe(gulp.dest(CSS_DESTINATION)) // Output compiled files in the same dir as Sass sources
  .pipe(bs.stream())); // Stream to browserSync

  /**
   * Watch Sass files for changes
   */
  gulp.task('watch:sass', gulp.series('compile:sass', () => {
    bs.init({
      proxy: 'http://localhost:8000/'
    });

    gulp.watch(SASS_SOURCES, gulp.series('compile:sass'));
  }));

  /**
  //  * Default task executed by running `gulp`
  //  */
  // gulp.task('default', ['watch:sass']);