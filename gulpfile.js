var gulp = require('gulp');
var less = require('gulp-less');
var csso = require('gulp-csso');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var spritesmith = require('gulp.spritesmith');
var sourcemaps = require('gulp-sourcemaps');
var rev = require('gulp-rev');
var del = require('del');

//path vars
var path = {
    less: {
        main: './less/styles.less',
        test: './less/test/test.less',
        font: './fonts/font-faces.less',
        temp: './less/temp.less',
        bootstrap: 'bower_components/bootstrap/less/**/*.less',
        fontAwesome: 'bower_components/font-awesome/less/*.less',
        components: './less/src/components/*.less'
    },
    js: {
        jquery: 'bower_components/jquery/dist/jquery.min.js',
        bootstrap: 'bower_components/bootstrap/dist/js/bootstrap.min.js',
        local: 'js/local.js'
    },
    fonts: {
        bootstrap: 'bower_components/bootstrap/fonts/**',
        fontAwesome: 'bower_components/font-awesome/fonts/**'
    },
    dist: {
        js: 'dist/js',
        css: 'dist/css',
        demo: 'dist/demo'
    }
};

var jsDist = [path.js.jquery, path.js.bootstrap, path.js.local];
var cssDist = [path.less.font, path.less.main];
var cssDemo = [path.less.test];

gulp.task('makeCss', function () {
    return gulp.src(cssDist)
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(csso())
        .pipe(concat({path: 'bundle.min.css', cwd: ''}))
        .pipe(gulp.dest(path.dist.css))
        .pipe(rev())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dist.css))
        .pipe(rev.manifest())
        .pipe(gulp.dest(path.dist.css));
});

gulp.task('makeDemo', function () {
    return gulp.src(cssDemo)
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(csso())
        .pipe(concat({path: 'bundle.min.css', cwd: ''}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dist.demo));
});

gulp.task('makeJs', function () {
    return gulp.src(jsDist)
        .pipe(sourcemaps.init())
        .pipe(concat({path: 'bundle.min.js', cwd: ''}))
        .pipe(uglify())
        .pipe(gulp.dest(path.dist.js))
        .pipe(rev())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dist.js))
        .pipe(rev.manifest())
        .pipe(gulp.dest(path.dist.js));
});

gulp.task('clean', function () {
    return del([path.dist.js, path.dist.css]);
});

//copy files
gulp.task('copyFonts', function () {
    gulp.src(path.fonts.bootstrap).pipe(gulp.dest('fonts'));
    gulp.src(path.fonts.fontAwesome).pipe(gulp.dest('fonts'));
});

gulp.task('copyLessLibs', function () {
    gulp.src(path.less.bootstrap).pipe(gulp.dest('less/src/bootstrap'));
    gulp.src(path.less.fontAwesome).pipe(gulp.dest('less/src/font-awesome'));
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

gulp.task('watch', function () {
    gulp.watch(jsDist, ['makeJs']);
    gulp.watch([cssDist, path.less.components], ['makeCss']);
    gulp.watch(path.less.test, ['makeDemo']);
});

/*
 * Main tasks
 */
gulp.task('default', ['make', 'makeDemo', 'watch']);
gulp.task('make', ['clean', 'makeCss', 'makeJs']);
gulp.task('init', ['copyAllFiles']);

//end with this task
gulp.task('makeAll', ['makeSprite', 'make']);
