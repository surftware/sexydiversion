var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var buildJs = require('gulp-build');
var buildCss = require('gulp-build');
var buildHtml = require('gulp-build');
var buildFonts = require('gulp-build');
var image = require('gulp-image');
var replace = require('gulp-replace-path');
var path = require('path');


// var sassOptions = {
//   errLogToConsole: true,
//   outputStyle: 'compressed' // 'compressed' 'compact' 'nested' 'expanded'
// };

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['./src/scss/*.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', '> 5%', 'Firefox ESR'],
            cascade: true
        }))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('./src/css'))
        .pipe(browserSync.stream());
});

// Move the javascript files into our /src/js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/tether/dist/js/tether.min.js'])
        .pipe(gulp.dest("./src/js"))
        .pipe(browserSync.stream());
});

// build HTML in dist and update paths
gulp.task('buildHtml', function() {
    return gulp.src('src/*.html')
    .pipe(replace('/assets/', 'assets/'))
    .pipe(replace('/css/', 'css/'))
    .pipe(replace('/js/', 'js/'))
        .pipe(gulp.dest('./template'))
});

// build JS in dist
gulp.task('buildJs', function() {
    return gulp.src('src/js/**/*')
        .pipe(gulp.dest('./template/js'))
});

// build Images in dist
gulp.task('image', function() {
    return gulp.src('./src/assets/img/**/*')
        .pipe(image())
        .pipe(gulp.dest('./template/assets/img'))
});

// build CSS in dist
gulp.task('buildCss', function() {
    return gulp.src('src/css/**/*')
        .pipe(gulp.dest('./template/css'))
});

// build Fonts in dist
gulp.task('buildFonts', function() {
    return gulp.src('src/assets/fonts/**/*')
        .pipe(gulp.dest('./template/assets/fonts'))
});

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./src"  
    });

    gulp.watch(['./src/scss/*.scss'], ['sass']);
    gulp.watch('./src/*.html').on('change', browserSync.reload);
});

gulp.task('default', ['js','buildHtml','buildFonts','image','buildJs','buildCss','serve']);