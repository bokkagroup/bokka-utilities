var gulp    = require('gulp');
var phpunit = require('gulp-phpunit');

gulp.task('phpunit', function() {
    var options = {
        debug: true
    }

    return gulp.src('phpunit.xml')
        .pipe(phpunit('./vendor/bin/phpunit', options));
});

gulp.task('default', ['phpunit']);
