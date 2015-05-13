module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    clean: {
      css: ['public/css/style.css'],
      js: ['public/script.js', 'public/script.min.js']
    },
    concat: {
      develop: {
        files: {
          'public/script.js': ['public/bower_components/jquery/dist/jquery.min.js', 'public/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/bower_components/prism/prism.js', 'public/js/main.js']
        }
      }
    },
    less: {
      develop: {
        options: {
          paths: ['public/less']
        },
        files: {
          'public/css/style.css': 'public/less/style.less'
        }
      }
    },
    jshint: {
      develop: ['Gruntfile.js', 'public/js/main.js']
    },
    watch: {
      css: {
        files: 'public/less/style.less',
        tasks: ['clean:css','less:develop']
      },
      js: {
        files: ['Gruntfile.js', 'public/js/main.js'],
        tasks: ['clean:js', 'jshint:develop', 'concat:develop', 'uglify:develop']
      }
    },
    uglify: {
      develop: {
        files: {
          'public/script.min.js': 'public/script.js'
        }
      }
    }
  });

  grunt.registerTask('develop', ['watch']);
};
