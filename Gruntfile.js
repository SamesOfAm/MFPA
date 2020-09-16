'use strict';

module.exports = function(grunt) {

    grunt.initConfig({
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    compass: false
                },
                files: {
                    'files/assets/css/style.min.css': [
                        'files/assets/css/src/general.scss'
                    ]
                }
            }
        }
    });

    // Load tasks
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Register tasks
    grunt.registerTask('default', [
        'sass'
    ]);

};