const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));


// compile scss to css
function style() {
return gulp.src('./scss/**/*.scss')
.pipe(sass())
.pipe(gulp.dest('./assets/css'));
}

function watch() {
gulp.watch('./scss/**/*.scss', style);
}


exports.style = style;
exports.watch = watch;