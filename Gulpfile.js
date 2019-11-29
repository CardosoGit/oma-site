// Aqui nós carregamos o gulp e os plugins através da função `require` do nodejs
var gulp = require('gulp');
//var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var clean = require('gulp-clean');
var cleanCSS = require('gulp-clean-css');
var es = require('event-stream');

// Definimos o diretorio dos arquivos para evitar repetição futuramente


//Aqui criamos uma nova tarefa através do ´gulp.task´ e damos a ela o nome 'lint'
// gulp.task('lint', function () {

//     // Aqui carregamos os arquivos que a gente quer rodar as tarefas com o `gulp.src`
//     // E logo depois usamos o `pipe` para rodar a tarefa `jshint`
//     gulp.src(files)
//         .pipe(jshint())
//         .pipe(jshint.reporter('default'));
// });

//Criamos outra tarefa com o nome 'js' para os arquivos .js
gulp.task('js', function () {

    // Carregamos os arquivos novamente
    // E rodamos uma tarefa para concatenação
    // Renomeamos o arquivo que sera minificado e logo depois o minificamos com o `uglify`
    // E pra terminar usamos o `gulp.dest` para colocar os arquivos concatenados e minificados na pasta build/
    return es.merge([
        gulp.src(["./assets/js/libs/jquery-1.11.1.min.js", "./assets/js/libs/jquery-ui.min.js", "./assets/js/libs/bootstrap.min.js"]),
        gulp.src(["./assets/js/modernizr.js", "./assets/js/scrollReveal.js", "./assets/js/oma_script.js", "./assets/js/login.js","./assets/js/resgate.js"]).pipe(concat('scripts.js')).pipe(uglify())
    ])
        .pipe(concat('dist.min.js'))
        .pipe(gulp.dest('./dist/js'));
});

gulp.task('clean', function () {
    return gulp.src('./dist')
        .pipe(clean({ force: true }));
});

//Criamos outra tarefa com o nome 'styles' para os arquivos .css
gulp.task('styles', function () {

    // Carregamos os arquivos novamente
    // E rodamos uma tarefa para concatenação
    // Renomeamos o arquivo que sera minificado e logo depois o minificamos com o `uglify`
    // E pra terminar usamos o `gulp.dest` para colocar os arquivos concatenados e minificados na pasta build/
    return gulp.src([
        './assets/css/bootstrap.min.css',
        './assets/css/style.css',
        './assets/css/servicos.css',
        './assets/css/animate.css',
        './assets/css/forms.css',
        './assets/css/resgate.css'
    ])
        .pipe(concat('dist.min.css'))
        .pipe(cleanCSS())
        .pipe(gulp.dest('./dist/styles'));

    
});

gulp.task('img-css', function(){
    return gulp.src([
        './assets/css/home-banner.jpg'        
        ])
        .pipe(gulp.dest('./dist/styles'))
})

gulp.task('images', function () {
    return gulp.src([
        './assets/imagens/**/*.jpg', 
        './assets/imagens/**/*.png', 
        './assets/imagens/**/*.svg',
        './assets/imagens/**/*.webp'       
        ])
        .pipe(gulp.dest('./dist/imagens'))
});

//Criamos uma tarefa 'default' que vai rodar quando rodamos `gulp` no projeto
gulp.task('default', ['clean'], function () {

    // Usamos o `gulp.run` para rodar as tarefas
    // E usamos o `gulp.watch` para o Gulp esperar mudanças nos arquivos para rodar novamente
    gulp.run('js');
    gulp.run('styles');
    gulp.run('images');
    gulp.run('img-css');
    // gulp.watch(files, function (evt) {
    //     gulp.run('js');
    // });
});