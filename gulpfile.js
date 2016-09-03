var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var csso = require('gulp-csso');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var spritesmith = require('gulp.spritesmith');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rev = require('gulp-rev');
var del = require('del');

//path vars
var path = {
    scss: {
        main: 'scss/styles.scss',
        test: 'scss/test/test.scss',
        font: 'scss/src/font-faces.scss',
        temp: 'scss/temp.scss',
        bootstrap: 'bower_components/bootstrap-sass/assets/stylesheets/**/*.scss',
        components: 'scss/src/components/*.scss'
    },
    js: {
        jquery: 'bower_components/jquery/dist/jquery.min.js',
        bootstrap: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        local: 'js/local.js'
    },
    fonts: {
        bootstrap: 'bower_components/bootstrap-sass/assets/fonts/bootstrap/**'
    },
    dist: {
        js: 'dist/js',
        css: 'dist/css',
        demo: 'dist/demo'
    }
};

var jsDist = [path.js.jquery, path.js.bootstrap, path.js.local];
var cssDist = [path.scss.font, path.scss.main];
var cssDemo = [path.scss.test];

function errorLog(error) {
    console.log(error);
    this.emit('end');
}

gulp.task('makeCss', function () {
    return gulp.src(cssDist)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on('error', errorLog)
        .pipe(postcss([ autoprefixer({ browsers: ['> 1%', 'ie >= 9', 'last 3 versions'] }) ]))
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
        .pipe(sass())
        .on('error', errorLog)
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
});

gulp.task('copyScssLibs', function () {
    gulp.src(path.scss.bootstrap).pipe(gulp.dest('scss/src/bootstrap'));
});

gulp.task('copyAllFiles', ['copyFonts', 'copyScssLibs']);

//generate sprites
gulp.task('makeSprite', function () {
    var spriteData =
        gulp.src('imgs/sprite_icons/*')
        .pipe(spritesmith({
            imgName: 'sprite.png',
            cssName: 'sprite.scss',
            padding: 2,
            imgPath: '../../imgs/sprite.png'
        }));
    spriteData.img.pipe(gulp.dest('imgs/'));
    spriteData.css.pipe(gulp.dest('scss/src/'));
});

gulp.task('watch', function () {
    gulp.watch(jsDist, ['makeJs']);
    gulp.watch([cssDist, path.scss.components], ['makeCss']);
    gulp.watch(path.scss.test, ['makeDemo']);
    gulp.watch('imgs/sprite_icons/*', ['makeSprite']);
});

/*
 * Main tasks
 */
gulp.task('default', ['make', 'makeDemo', 'watch']);
gulp.task('make', ['clean', 'makeCss', 'makeJs']);
gulp.task('init', ['copyAllFiles']);

//end with this task
gulp.task('makeAll', ['makeSprite', 'make']);
