const gulp 		= require("gulp");
const sass 		= require("gulp-sass");
const notify 	= require("gulp-notify");
const changed	= require('gulp-changed');

/*
  Task responsável por recuperar todos arquivos no formato .scss e .sass
  e retornar para pasta css que será criada automaticamente.
*/

gulp.task("sass", function(){
	return gulp.src(['./source/scss/style.scss'])
				.pipe(sass())
				.on("error", notify.onError({title:"erro ao compilar", message:"<%= error.message %>"}))
				.pipe(gulp.dest("./assets/css"))
});

//tarefa para pasta img
gulp.task('img', function(){
	return gulp.src('./source/img/**/*')
	.pipe(changed('./assets/img'))
	.pipe(gulp.dest('./assets/img'));
});

//tarefa para pasta js
gulp.task('js', function(){
	return gulp.src('./source/js/**/*.js')
	.pipe(changed('./assets/js/'))
	.pipe(gulp.dest('./assets/js/'));
});

/*
	Task responsável por executar de fundo todas a mudanças que houver nos arquivos
*/

gulp.task("sass:watch", function(){
	gulp.watch("./source/scss/**/*.scss", ['sass']);
	gulp.watch("./source/img/**/*", ['img']);
	gulp.watch("./source/js/**/*.js", ['js']);
});

/*
  Task default para iniciar apenas com o comando "gulp" no terminal
*/

gulp.task("default",['sass', 'sass:watch', 'img', 'js']);