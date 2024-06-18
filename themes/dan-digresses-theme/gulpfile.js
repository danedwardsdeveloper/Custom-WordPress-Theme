const gulp = require('gulp');
const purgecss = require('gulp-purgecss');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');

const paths = {
	styles: {
		src: ['assets/css/**/*.css', '!assets/css/style.css'],
		dest: 'assets/css/',
	},
};

function styles() {
	return gulp
		.src(paths.styles.src)
		.pipe(
			purgecss({
				content: [],
			})
		)
		.pipe(
			cleanCSS({
				level: {
					1: {
						specialComments: 0,
					},
					2: {
						all: true,
						removeDuplicateRules: true,
					},
				},
			})
		)
		.pipe(concat('style.min.css'))
		.pipe(gulp.dest(paths.styles.dest));
}

function watchFiles() {
	gulp.watch(paths.styles.src, styles);
}

const build = gulp.series(styles);
const watch = gulp.series(build, watchFiles);

exports.styles = styles;
exports.build = build;
exports.watch = watch;
exports.default = build;
