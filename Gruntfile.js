// Gruntfile.js
module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-watch');
  // Configure Grunt
  grunt.initConfig({

    // base configure
    pkg: grunt.file.readJSON('package.json'),

    // SASS
    sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'src/includes/templateIncludes/css/main.css' : 'src/includes/templateIncludes/scss/main.scss'
        }
      }
    },

    // watch the files for changes
    watch: {
      options: {
        livereload: true,
      },
      css: {
        files: ['src/includes/templateIncludes/scss/*.scss'],
        tasks: ['sass'],
      },
    },

  });

  require('load-grunt-tasks')(grunt);

  // Default Task is basically a rebuild
  grunt.registerTask('default', ['sass', 'watch']);

};