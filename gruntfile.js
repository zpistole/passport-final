module.exports = function(grunt) {
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compass');
  //grunt.loadNpmTasks('grunt-purifycss');
  //grunt.loadNpmTasks('grunt-contrib-htmlmin');
  grunt.initConfig({
    uglify: {
      my_target: {
        files: {
          '_/js/script.js': ['_/components/js/*.js']
        }//files
      }//my_target
    },//uglify
    // purifycss: {
    //   options: {
    //     min: true,
    //     rejected: true,
    //   },
    //   target: {
    //     src: ['*.php'],
    //     css: ['_/css/*.css'],
    //     dest: '_/css/clean.css'
    //   }
    // },
    // htmlmin: {
    //   dist: {
    //     options: {
    //       removeComments: true,
    //       collapseWhitespace: true
    //     },
    //     files: {
    //       'index3.php': 'index2.php'
    //     }
    //   }
    // },
    compass: {
      dev: {
        options: {
          config: 'config.rb'
        }//options
      }//dev
    },//compass
    watch: {
      options: {livereload:true },
      scripts: {
        files: ['_/components/js/*.js'],
        tasks: ['uglify']
      },//scripts
      sass: {
        files: ['_/components/sass/*.scss'],
        tasks: ['compass:dev']
      },//sass
      php: {
        files: ['*.php']
      }
    }//watch
  })//initConfig
  grunt.registerTask('default', 'watch');
} //exports
