module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);
  var config = {
      tp: 'template'
  };
  grunt.initConfig({
      config: config,
      php: {
        dist: {
            options: {
                hostname: 'localhost',
                port: 9000,
                keepalive: false,
                open: false
            }
        }
      },
      sass: {
        dist: {
          options: {},
          files: [{
            expand: true,
            cwd: '<%= config.tp %>/sass',
            src: '{,*/}*.scss',
            dest: '<%= config.tp %>/css',
            ext: '.css'
          }]
        }
      },
      watch: {
        styles: {
          files: ['<%= config.tp %>/sass/*.scss'],
          tasks: ['sass'],
          options: {
            nospawn: true
          }
        }
      }
  });

  grunt.registerTask('serve', [
      'php:dist',
      'watch'
  ]);

  grunt.registerTask('default', ['serve']);
};