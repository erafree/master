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
                //base: 'dist', // Project root
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
      }
  });

  grunt.registerTask('serve', [
      'php:dist',         // Start PHP Server
      'browserSync:dist', // Using the php instance as a proxy
      'watch'             // Any other watch tasks you want to run
  ]);

  //grunt.registerTask('devPrepare', ['less','watch', 'serve']);
  grunt.registerTask('default', ['serve']);
};