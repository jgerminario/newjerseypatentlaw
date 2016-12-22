module.exports = function(grunt) {
  grunt.initConfig({
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        cwd: 'css/',
        files: {
          'css/style.min.css': ['css/style.css']
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-cssmin');
}