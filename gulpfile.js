var gulp = require('gulp'),
    sass = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    plumber = require('gulp-plumber'),
    beep = require('beepbeep'),
    concat = require('gulp-concat'),
		uglify = require('gulp-uglify'),
    autoPrefix = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    gulpInclude = require('gulp-include'),



 settings = {
  server: 'http://localhost:dev/beetus/dexcomwebapp/',
  siteFiles: '**/*.php',
  sassFiles: 'scss/**/*.scss',
  cssDest: 'assets/css/',
  jsRl: 'js/*.js',
  jsDir: 'js/global.js',
  jsDest: 'assets/js'
},

createBeep = function(err){
  beep();
  console.log(err);
  this.emit('end')
}


gulp.task('serve', ['sass'], function(){
  browserSync.init({
    proxy: settings.server,
    notify: false
  }) 

  gulp.watch(settings.siteFiles).on('change', browserSync.reload)
  gulp.watch(settings.jsRl , ['js']).on('change', browserSync.reload)
  gulp.watch(settings.sassFiles, ['sass']);
})



gulp.task('sass', function(){
  return gulp.src(settings.sassFiles)
  .pipe(plumber(createBeep))
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(autoPrefix({
  browsers: ['> 0.5%', 'last 5 versions']
  }))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(settings.cssDest))
  .pipe(browserSync.stream())
})


gulp.task('js', function(){
 gulp.src(settings.jsDir)
  .pipe(plumber(createBeep))
  .pipe(gulpInclude())
  .pipe(concat('global.js'))
  .pipe(uglify())
  .pipe(gulp.dest(settings.jsDest));
})

gulp.task('default', ['sass', 'js', 'serve']);