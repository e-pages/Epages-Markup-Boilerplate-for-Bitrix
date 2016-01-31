var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');

//paths
var mainLessFile = './less/styles.less';
var testLessFile = './less/test/test.less';
var fontFaceLessFile = './fonts/font-faces.less';

var jqueryFilePath = 'bower_components/jquery/dist/jquery.min.js';
var bootstrapJsFilePath = 'bower_components/bootstrap/dist/js/bootstrap.min.js';
var jsLibs = [jqueryFilePath, bootstrapJsFilePath];

var bsFontsPath = 'bower_components/bootstrap/fonts/**';

//compile main less file & compress it
gulp.task('compileMainLessFile', function () {
    return gulp.src(mainLessFile)
        .pipe(less())
        .pipe(csso())
        .pipe(gulp.dest('./css'));
});

//compile test less file & compress it
gulp.task('compileTestLessFile', function () {
    return gulp.src(testLessFile)
        .pipe(less())
        .pipe(csso())
        .pipe(gulp.dest('./css'));
});

//compile font-face less file & compress it
gulp.task('compileFontFaceFile', function () {
    return gulp.src(fontFaceLessFile)
        .pipe(less())
        .pipe(csso())
        .pipe(gulp.dest('./css'));
});

//minify js
//gulp.task('minifyJs', function () {
//    return gulp.src(jsLibs)
//        .pipe(uglify())
//        .pipe(gulp.dest('./js/libs'));
//});

//copy files
gulp.task('copyFonts', function () {
    return gulp.src(bsFontsPath)
        .pipe(gulp.dest('fonts'))
});


/*
 * Main tasks
 */
gulp.task('default',
    ['compileMainLessFile', 'compileTestLessFile', 'compileFontFaceFile', 'concatJs', 'copyFonts', 'watchLess']
);

//concat js
gulp.task('concatJs', function() {
    return gulp.src(jsLibs)
        .pipe(concat('libs.min.js'))
        .pipe(gulp.dest('./js'));
});

//compile less files
gulp.task('watchLess', function () {
    //watch for styles.less
    gulp.watch(mainLessFile, ['compileMainLessFile']);

    //watch for test.less
    gulp.watch(testLessFile, ['compileTestLessFile']);

    //watch for test.less
    gulp.watch(fontFaceLessFile, ['compileFontFaceFile']);
});

//add prefixes at the end of developing
gulp.task('addVendorPrefixes', function () {
    return gulp.src('css/styles.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('css/'));
});