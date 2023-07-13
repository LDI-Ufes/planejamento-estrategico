import gulp from 'gulp';
import imagemin from 'gulp-imagemin';

function compress() {
    return gulp.src('img/*.jpg')
    .pipe(imagemin())
    .pipe(gulp.dest('img/'))
}

gulp.task('compress', compress)
