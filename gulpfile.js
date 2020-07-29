const fs = require('fs');
const browserSync = require('browser-sync').create();
const gulp = require('gulp');
const cssnano = require('cssnano');
const vinylFTP = require('vinyl-ftp');
const buffer = require('vinyl-buffer');
const source = require('vinyl-source-stream');
const autoprefixer = require('gulp-autoprefixer');
const browserify = require('browserify');
const babelify = require('babelify');
const uglifyify = require('uglifyify');
const combineMQ = require('gulp-combine-mq');
const imagemin = require('gulp-imagemin');
const newer = require('gulp-newer');
const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const replace = require('gulp-replace');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');
const size = require('gulp-size');
const sourcemaps = require('gulp-sourcemaps');
const svgstore = require('gulp-svgstore');
const uglify = require('gulp-uglify-es').default;
const tildeImporter = require('node-sass-tilde-importer');
const merge = require('merge-stream');
const exec = require('child_process').exec;

function errorHandler(error) {
    console.error(error);
    this.emit('end');
}

const is_PRODUCTION = process.env.NODE_ENV === 'production';
const is_DEV = process.env.NODE_ENV === 'development';

const CSSNANO_CONFIG = {
    preset: [
        'advanced', {
            discardComments: true,
            discardDuplicates: true,
            discardEmpty: true,
            discardUnused: false,
            minifyParams: true,
            minifySelectors: true,
            minifyFontValues: true,
            zindex: false,
            reduceIdents: false,
        }
    ],
};

const SVGO_CONFIG = {
    precision: 3,
    plugins: [
        {cleanupAttrs: true},
        {removeDoctype: true},
        {removeXMLProcInst: true},
        {removeComments: true},
        {removeMetadata: true},
        {removeTitle: true},
        {removeDesc: {removeAny: true}},
        {removeUselessDefs: true},
        {removeEditorsNSData: true},
        {removeEmptyAttrs: true},
        {removeHiddenElems: true},
        {removeEmptyText: true},
        {removeEmptyContainers: true},
        {removeViewBox: false},
        {cleanupEnableBackground: true},
        {minifyStyles: true},
        {convertStyleToAttrs: true},
        {convertColors: true},
        {convertPathData: {
            applyTransforms: true,
            applyTransformsStroked: true,
            makeArcs: {
                threshold: 2.5,
                tolerance: 0.5
            },
            straightCurves: true,
            lineShorthands: true,
            curveSmoothShorthands: true,
            floatPrecision: 3,
            transformPrecision: 5,
            removeUseless: true,
            collapseRepeated: false,
            utilizeAbsolute: true,
            leadingZero: true,
            negativeExtraSpace: true
        }},
        {convertTransform: {
            convertToShorts: true,
            floatPrecision: 3,
            transformPrecision: 5,
            matrixToTransform: true,
            shortTranslate: true,
            shortScale: true,
            shortRotate: true,
            removeUseless: true,
            collapseIntoOne: true,
            leadingZero: true,
            negativeExtraSpace: true
        }},
        {removeUnknownsAndDefaults: true},
        {removeNonInheritableGroupAttrs: true},
        {removeUselessStrokeAndFill: true},
        {removeUnusedNS: true},
        {cleanupIDs: false},
        {cleanupNumericValues: true},
        {cleanupListOfValues: true},
        {moveElemsAttrsToGroup: true},
        {moveGroupAttrsToElems: true},
        {collapseGroups: false},
        {removeRasterImages: false},
        {mergePaths: false},
        {convertShapeToPath: true},
        {sortAttrs: false},
        {transformsWithOnePath: false},
        {removeAttrs: true},
        // {removeAttrs: {
        //     attrs: '(fill)'
        // }},
        {removeElementsByAttr: false},
        {removeStyleElement: true},
        {removeScriptElement: true}
    ],
};

const IMAGEMIN_CONFIG = [
    imagemin.gifsicle({ interlaced: true }),
    imagemin.jpegtran({ progressive: true }),
    imagemin.optipng({ optimizationLevel: 7 }),
    imagemin.svgo({ precision: 3 })
];

const FTP_CONFIG = vinylFTP.create({
    // host: '31.31.198.82',
    // user: 'u0824318_guide',
    // password: '9C1h2Q5t-dfQe78',
    parallel: 5,
});

const FTP_PATHS = [
    'blade/**',
    'dist/**',
    // 'vendor/**',
    '*.php',
    // 'package.json',
    '*.png',
    '*.ico',
    // '.htaccess'
];

function sass_compile() {
    return gulp.src(['src/styles/**/*.{sass,scss}', '!src/styles/_*/**/*.{sass,scss}'])
        .pipe(sassGlob())
        .pipe(sass({ importer: tildeImporter }))
        .on('error', errorHandler)
        .pipe(combineMQ({ beautify: true }))
        .pipe(autoprefixer({ cascade: false, remove: false }))
        .pipe(rename({ suffix: '.min' }))
        .pipe(postcss([cssnano(CSSNANO_CONFIG)]))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(browserSync.stream())
        .pipe(gulp.dest('dist/styles/'));
}

exports.sass_compile = sass_compile;

function js_libs() {
    return gulp.src('src/js/libs/*.js')
        .pipe(newer('dist/js/libs'))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/js/libs'));
}

exports.js_libs = js_libs;

function js_bundle() {
    let files = ["guide", "scripts", "svg-icons"];

    if (is_DEV) {
        return merge(files.map((file) => {
            return browserify({ entries: 'src/js/'+ file +'.js' })
                .transform(babelify)
                .transform(uglifyify)
                .bundle()
                .on('error', errorHandler)
                .pipe(source(file +'.js'))
                .pipe(buffer())
                // .pipe(gulp.dest('dist/js'))
                // .pipe(sourcemaps.init())
                .pipe(rename({ suffix: '.min' }))
                .pipe(uglify())
                // .pipe(sourcemaps.write('.'))
                .pipe(size({ gzip: false, showFiles: true }))
                .pipe(browserSync.stream())
                .pipe(gulp.dest('dist/js'));
        }));
    }

    if (is_PRODUCTION) {
        return merge(files.map((file) => {
            return browserify({ entries: 'src/js/'+ file +'.js' })
                .transform(babelify)
                .transform(uglifyify)
                .bundle()
                .on('error', errorHandler)
                .pipe(source(file +'.js'))
                .pipe(buffer())
                .pipe(rename({ suffix: '.min' }))
                .pipe(uglify())
                .pipe(size({ gzip: false, showFiles: true }))
                .pipe(gulp.dest('dist/js'));
        }));
    }
}

exports.js_bundle = js_bundle;

// function icons_min() {
//     return gulp.src('src/img/icons/**/*.svg')
//         .pipe(newer('dist/img/icons/'))
//         .pipe(imagemin([
//             imagemin.svgo(SVGO_CONFIG)
//         ], { verbose: true }))
//         .pipe(replace(' fill="#000"', ''))
//         .pipe(replace(' fill="none"', ''))
//         .pipe(size({ gzip: false, showFiles: true }))
//         .pipe(gulp.dest('dist/img/icons/'));
// }
//
// exports.icons_min = icons_min;

function icons_16x16() {
    const path = 'dist/img/icons/_icons.svg';

    fs.existsSync(path) && fs.unlinkSync(path);

    return gulp.src('src/img/icons/16x16/*.svg')
        .pipe(svgstore())
        .pipe(rename('_icons-16x16.svg'))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/img/icons/'));
}

exports.icons_16x16 = icons_16x16;

function icons_24x24() {
    const path = 'dist/img/icons/_icons.svg';

    fs.existsSync(path) && fs.unlinkSync(path);

    return gulp.src('src/img/icons/24x24/*.svg')
        .pipe(svgstore())
        .pipe(rename('_icons-24x24.svg'))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/img/icons/'));
}

exports.icons_24x24 = icons_24x24;

function icons_48x48() {
    const path = 'dist/img/icons/_icons.svg';

    fs.existsSync(path) && fs.unlinkSync(path);

    return gulp.src('src/img/icons/48x48/*.svg')
        .pipe(svgstore())
        .pipe(rename('_icons-48x48.svg'))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/img/icons/'));
}

exports.icons_48x48 = icons_48x48;

function images() {
    return gulp.src(['src/img/**/*.{png,jpg,jpeg,gif,svg}', '!src/img/icons/**/*'])
        .pipe(newer('dist/img/'))
        .pipe(imagemin(IMAGEMIN_CONFIG, { verbose: true }))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/img/'));
}

exports.images = images;

function videos() {
    return gulp.src('static/video/**/*.*')
        .pipe(newer('dist/video/'))
        .pipe(size({gzip: false, showFiles: true}))
        .pipe(gulp.dest('dist/video/'));
}

exports.videos = videos;

function fonts() {
    return gulp.src('static/fonts/**/*.*')
        .pipe(newer('dist/fonts/'))
        .pipe(size({ gzip: false, showFiles: true }))
        .pipe(gulp.dest('dist/fonts/'));
}

exports.fonts = fonts;

function deploy() {
    return gulp.src(FTP_PATHS, { base: '.', buffer: false })
        .pipe(FTP_CONFIG.newerOrDifferentSize('/guide.a2.life'))
        .pipe(FTP_CONFIG.dest('/guide.a2.life'));
}

exports.deploy = deploy;

// sudo lsof -i :8082
// sudo kill -9 <PID>

function watch() {
    exec('php -S 0.0.0.0:2200');

    browserSync.init({
        proxy: '0.0.0.0:2200',
        ui: false,
        port: 2222,
        open: false,
        injectChanges: true,
        // tunnel: true,
    });

    gulp.watch(['blade/**/*.php', 'blocks/**/*.php', 'tapes/**/*.php', '*.php']).on('change', browserSync.reload);
    gulp.watch(['src/img/**/*.{png,jpg,jpeg,gif,svg}', '!src/img/icons/**/*'], images);
    gulp.watch('src/styles/**/*.sass', sass_compile);
    gulp.watch('src/img/icons/16x16/*.svg', icons_16x16);
    gulp.watch('src/img/icons/24x24/*.svg', icons_24x24);
    gulp.watch('src/img/icons/48x48/*.svg', icons_48x48);
    gulp.watch('src/js/**/*.js', js_bundle);
    gulp.watch('src/js/libs/*.js', js_libs);
    gulp.watch('static/fonts/**/*.*', fonts);
    gulp.watch('static/video/**/*.*', videos);
}

// exports.icons_16x16 = gulp.series(icons_min, icons_16x16);

const default_tasks = gulp.parallel(images, sass_compile, js_bundle, js_libs, fonts, videos, icons_16x16, icons_24x24, icons_48x48);
exports.default = default_tasks;

exports.watch = gulp.series(default_tasks, watch);
