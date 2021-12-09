// https://github.com/CodeChron/browsersync-gulp-4-express/blob/master/gulpfile.js

// // add to package.json: 
// "dependencies": {
//     "browser-sync": "^2.26.7",
//     "gulp": "^4.0.2"
//   },

var gulp = require('gulp')
var browserSync = require('browser-sync').create()



// dist is the distribution folder
var paths = {
	// copyFilesDist: {
	// 	src: './*.html',
	// 	dest: './dist/'
	// },
	styles: {
		src: './sass/**/*.scss',
		dest: './css'
	},
	// stylesDist: {
	// 	src: './sass/**/*.scss',
	// 	dest: './dist/css'
	// },
	images: {
		src: './img-raw/**/*.{jpg,png}',
		dest: './img'
	},
	imagesWebp: {
		src: './img-raw/**/*.{jpg,png}',
		dest: './img-raw'
	},
	scripts: {
		src: './js/**/*.js',
		dest: './js/'
	},
	scriptsDist: {
		src: './js/**/*.js',
		dest: './dist/js/'
	}
	// gzip: {
	// 	src: 'js/**/*.{html,xml,json,css,js}',
	// 	dest: './js/'
	// 	options: {}
	// },

}

function watch() {
	//watch the styles folder and execute styles func
	// gulp.watch(paths.styles.src).on('change', browserSync.reload)
	gulp.watch('./**/*.{html,js,php,twig,yaml,scss}').on('change', browserSync.reload)
}

function browserSyncInit() {
	browserSync.init({
		proxy: 'http://localhost/wpdev/wp-admin/plugins.php',
		// browser:  ["firefox", "chromium-browser", "google-chrome"]
		browser:  ["google-chrome"]
	});

}



/*
 * Define default task that can be called by just running `gulp` from cli
 */
gulp.task('default', gulp.series(gulp.parallel(watch, browserSyncInit)))
