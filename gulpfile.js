var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var csso = require('gulp-csso');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var spritesmith = require('gulp.spritesmith');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var fs = require('fs');

//path vars
var path = {
    scss: {
        main: 'scss/styles.scss',
        test: 'scss/test/test.scss',
        font: 'scss/src/font-faces.scss',
        temp: 'scss/temp.scss',
        bootstrap: 'bower_components/bootstrap-sass/assets/stylesheets/**/*.scss',
        components: 'scss/components/*.scss'
    },
    js: {
        jquery: 'bower_components/jquery/dist/jquery.min.js',
        bootstrap: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js'
    },
    fonts: {
        bootstrap: 'bower_components/bootstrap-sass/assets/fonts/bootstrap/**'
    },
    dist: {
        js: 'js',
        css: 'css',
        demo: 'demo'
    }
};

var jsDist = [path.js.jquery, path.js.bootstrap];
var cssDist = [path.scss.font, path.scss.main];
var cssDemo = [path.scss.test];

function errorLog(error) {
    console.log(error);
    this.emit('end');
}

gulp.task('css', function () {
    return gulp.src(cssDist, { base: '.' })
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on('error', errorLog)
        .pipe(postcss([ autoprefixer({ browsers: ['> 1%', 'ie >= 9', 'last 3 versions'] }) ]))
        .pipe(csso())
        .pipe(concat({path: 'bundle.min.css', cwd: ''}))
        .pipe(gulp.dest(path.dist.css))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dist.css));
});

gulp.task('demo', function () {
    return gulp.src(cssDemo)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .on('error', errorLog)
        .pipe(csso())
        .pipe(concat({path: 'bundle.min.css', cwd: ''}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(path.dist.demo));
});

gulp.task('js', function () {
    return gulp.src(jsDist)
        .pipe(concat({path: 'lib.min.js', cwd: ''}))
        .pipe(uglify())
        .pipe(gulp.dest(path.dist.js))
});

//copy files
gulp.task('fonts', function () {
    gulp.src(path.fonts.bootstrap).pipe(gulp.dest('fonts'));
});

gulp.task('css:libs', function () {
    gulp.src(path.scss.bootstrap).pipe(gulp.dest('scss/bootstrap'));
});

//generate sprites
gulp.task('sprite', function () {
    var spriteData =
        gulp.src('img/sprite/*')
        .pipe(spritesmith({
            imgName: 'sprite.png',
            cssName: 'sprite.scss',
            padding: 2,
            imgPath: '../img/sprite.png'
        }));
    spriteData.img.pipe(gulp.dest('img/'));
    spriteData.css.pipe(gulp.dest('scss/'));
});

gulp.task('watch', function () {
    gulp.watch([cssDist, path.scss.components, 'scss/sprite.scss'], ['css']);
    gulp.watch(path.scss.test, ['demo']);
    gulp.watch('img/sprite/*', ['sprite']);
});

gulp.task('make:dir', function () {
    var dirs = [
        'img',
        'img/sprite',
        'markup/sample-img',
        'scss/components'
    ];

    for (var i = 0, l = dirs.length; i < l; i += 1) {
        if (!fs.existsSync(dirs[i])){
            fs.mkdirSync(dirs[i]);
        }
    }
});

/*
 * Main tasks
 */
gulp.task('make', ['css']);
gulp.task('make:all', ['sprite', 'make']);
gulp.task('init', ['make:dir', 'fonts', 'css:libs', 'js', 'make:all']);
gulp.task('default', ['make', 'demo', 'watch']);
