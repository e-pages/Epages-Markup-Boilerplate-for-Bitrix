var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

//paths
var mainLessFile = './less/styles.less';
var testLessFile = './less/test/test.less';
var fontFaceLessFile = './fonts/font-faces.less';
var mainBootstrapFilePath = 'bower_components/bootstrap/less/bootstrap.less';
var mainFontAwesomeFilePath = 'bower_components/font-awesome/less/font-awesome.less';
var jqueryFilePath = 'bower_components/jquery/dist/jquery.min.js';

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



//var jsLibs = ['./js/libs/jquery-2.1.4.min.js', './js/libs/holder.min.js', './js/libs/bootstrap.min.js'];



//minify js
//gulp.task('minify_js', function () {
//    return gulp.src(jsLibs)
//        .pipe(uglify())
//        .pipe(gulp.dest('./js/libs.js'));
//});

//concat js
//gulp.task('concat_js', function() {
//    return gulp.src(jsLibs)
//        .pipe(concat('libs.min.js'))
//        .pipe(gulp.dest('./js'));
//});

gulp.task('default', function () {
    //gulp.run('concat_js');

    //watch for styles.less
    gulp.watch(mainLessFile, function () {
        gulp.run('compileMainLessFile');
    });

    //watch for test.less
    gulp.watch(testLessFile, function () {
        gulp.run('compileTestLessFile');
    });

    //watch for test.less
    gulp.watch(fontFaceLessFile, function () {
        gulp.run('compileFontFaceFile');
    });

    //gulp.watch('./js/script.js', function () {
    //    gulp.run(['minify_js', 'concat_js']);
    //});
});