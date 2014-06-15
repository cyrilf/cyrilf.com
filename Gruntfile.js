module.exports = function(grunt) {

  grunt.initConfig({

    // Automatically run a task when a file changes
    watch: {
      styles: {
        files: ["css/less/**/*"],
        tasks: "less:dev",
        options: {
          livereload: true
        }
      }
    },

    // Compile specified less files
    less: {
      dev: {
        options: {
          // These paths are searched for @imports
          paths: ["css/less"]
        },
        files: {
          "css/screen.css": "css/less/screen.less"
        }
      },
      prod: {
        options: {
          // These paths are searched for @imports
          paths: ["css/less"],
          yuicompress: true,
          report: 'gzip'
        },
        files: {
          "css/screen.css": "css/less/screen.less"
        }
      }
    }
  });

  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks('grunt-contrib-less');

  // Default task(s).
  grunt.registerTask('default', ['less:dev']);
  grunt.registerTask("dev", ["less:dev", "watch:styles"]);
  grunt.registerTask("prod", ["less:prod"]);
};