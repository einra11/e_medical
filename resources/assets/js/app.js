
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require( 'pdfmake' );
require( 'datatables.net-buttons-bs4');
require( 'datatables.net-buttons/js/buttons.html5.js' );
require( 'datatables.net-buttons/js/buttons.print.js' );
require( 'datatables.net-responsive-bs4' );
require( 'datatables.net-scroller-bs4' );
// require( 'jquery' );
require( 'datatables.net');
// require('gijgo');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('queue-app', require('./components/Queue.vue'));

const app = new Vue({
    el: '#app'
});



$(document).ready(function() {
    var table2 = $('#example1').DataTable();
    var table = $('#example').DataTable();
    var table3 = $('#example2').DataTable();
    $('#example tbody').on('click', 'tr', function () {
        var data = table.row( this ).data();
        $('#addhere1').val(data[0]);
        $('#addhere2').val(data[1]);
        $('#addhere3').val(data[2]);
        $('#addhere4').val(data[3]);
    } );
} );
