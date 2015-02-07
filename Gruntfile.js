module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);
  var config = {
      tp: 'template'
  };
  grunt.initConfig({
      config: config,
      less:  {
        development: {
          options: {
            compress: false,
            yuicompress: false,
            optimization: 2,
            sourceMap: true,
            sourceMapFilename: '<%= config.tp %>/css/roots/main.min.css.map',
            sourceMapURL: 'roots/main.min.css.map',
            sourceMapRootpath: '../../'
          },
          files: [{
              expand: true,
              cwd: '<%= config.tp %>/less',
              src: '{,*/}*.less', //'{,*/}*.less'
              dest: '<%= config.tp %>/css',
              ext: '.css'
          }]
        }
      },
      watch: {
        styles: {
          files: ['<%= config.tp %>/less/*.less'],
          tasks: ['less'],
          options: {
            nospawn: true
          }
        }
      },
      serve: {
        options: {
            port: 9000
        }
    }
  });

  grunt.registerTask('devPrepare', ['less','watch', 'serve']);
  grunt.registerTask('default', ['devPrepare']);

};