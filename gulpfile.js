var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var spritesmith = require('gulp.spritesmith');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var sourcemaps = require('gulp-sourcemaps');

//paths vars
var paths = {
    less: {
        main: './less/styles.less',
        test: './less/test/test.less',
        font: './fonts/font-faces.less',
        temp: './less/temp.less',
        bootstrap: 'bower_components/bootstrap/less/**/*.less',
        fontAwesome: 'bower_components/font-awesome/less/*.less'
    },
    js: {
        jquery: 'bower_components/jquery/dist/jquery.min.js',
        bootstrap: 'bower_components/bootstrap/dist/js/bootstrap.min.js',
        local: 'js/local.js'
    },
    fonts: {
        bootstrap: 'bower_components/bootstrap/fonts/**',
        fontAwesome: 'bower_components/font-awesome/fonts/**'
    }
};

var jsLibs = [paths.js.jquery, paths.js.bootstrap, paths.js.local];

//compile main less file & compress it
gulp.task('compileMainLessFile', function () {
    return gulp.src(paths.less.main)
        .pipe(less())
        .pipe(csso())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css'));
});

//compile test less file & compress it
gulp.task('compileTestLessFile', function () {
    return gulp.src(paths.less.test)
        .pipe(less())
        .pipe(csso())
        .pipe(autoprefixer())
        .pipe(gulp.dest('./css'));
});

//compile font-face less file & compress it
gulp.task('compileFontFaceFile', function () {
    return gulp.src(paths.less.font)
        .pipe(less())
        .pipe(csso())
        .pipe(gulp.dest('./css'));
});

//compile temporary less file & compress it
//temp file will be deleted in the end
gulp.task('compileTempFile', function () {
    return gulp.src(paths.less.temp)
        .pipe(less())
        .pipe(csso())
        .pipe(gulp.dest('./css'));
});
gulp.task('compileAllLessFiles', ['compileMainLessFile', 'compileTestLessFile', 'compileFontFaceFile', 'compileTempFile']);

//copy files
gulp.task('copyFonts', function () {
    gulp.src(paths.fonts.bootstrap).pipe(gulp.dest('fonts'));
    gulp.src(paths.fonts.fontAwesome).pipe(gulp.dest('fonts'));
});

//copy css files when you need styles from bower component
//gulp.task('copyStyles', function () {
//    return gulp.src()
//        .pipe(gulp.dest('css'))
//});

gulp.task('copyLessLibs', function () {
    gulp.src(paths.less.bootstrap).pipe(gulp.dest('less/src/bootstrap'));
    gulp.src(paths.less.fontAwesome).pipe(gulp.dest('less/src/font-awesome'));
});
gulp.task('copyAllFiles', ['copyFonts', 'copyLessLibs']);

//generate sprites
gulp.task('makeSprite', function () {
    var spriteData =
        gulp.src('./imgs/sprite_icons/*.*')
            .pipe(spritesmith({
                imgName: 'sprite.png',
                cssName: 'sprite.less',
                padding: 2,
                imgPath: '../imgs/sprite.png'
            }));
    spriteData.img.pipe(gulp.dest('./imgs/'));
    spriteData.css.pipe(gulp.dest('./less/src/'));
});

//minify images
gulp.task('imagemin', function () {
    return gulp.src('imgs/*')
        .pipe(imagemin({
            progressive: true,
            use: [pngquant()]
        }))
        .pipe(gulp.dest('imgs/'));
});

//concat js
gulp.task('compressJS', function() {
    return gulp.src(jsLibs)
        .pipe(sourcemaps.init())
        .pipe(concat('js/libs.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('.'));
});

//compile less files
gulp.task('watchLess', function () {
    //watch for main styles.less
    gulp.watch(paths.less.main, ['compileMainLessFile']);

    //watch for test.less
    gulp.watch(paths.less.test, ['compileTestLessFile']);

    //watch for font-face.less
    gulp.watch(paths.less.font, ['compileFontFaceFile']);

    //watch for temp.less
    gulp.watch(paths.less.temp, ['compileTempFile']);
});

//add prefixes at the end of developing
gulp.task('addVendorPrefixes', function () {
    return gulp.src('css/styles.css')
        .pipe(autoprefixer())
        .pipe(gulp.dest('css/'));
});

/*
 * Main tasks
 */
gulp.task('default',
    ['compileAllLessFiles', 'concatJs', 'copyAllFiles', 'watchLess']
);

//end with this task
gulp.task('end',
    ['addVendorPrefixes', 'imagemin', 'makeSprite', 'compileAllLessFiles', 'concatJs']
);