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
                hostname: '127.0.0.1',
                port: 9000,
                keepalive: false,
                open: false
            }
        }
      },
      browserSync: {
        dist: {
            bsFiles: {
                src: [
                    // Files you want to watch for changes
                ]
            },
            options: {
                proxy: '<%= php.dist.options.hostname %>:<%= php.dist.options.port %>',
                watchTask: true,
                notify: true,
                open: true,
                logLevel: 'silent',
                ghostMode: {
                    clicks: true,
                    scroll: true,
                    links: true,
                    forms: true
                }
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
      'browserSync:dist',
      'watch'
  ]);

  grunt.registerTask('default', ['serve']);
};