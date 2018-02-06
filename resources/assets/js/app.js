
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/ui/widgets/autocomplete.js';
$( ".datepicker").datepicker({autoSize: true, dateFormat: "yy-mm-dd", });

new Vue({
  el: '#demoList',
  template: '<li><a href="/admin1/pagospendientes" class="icon-info" style="padding-left:5px;"><i class="fa fa-envelope" aria-hidden="true"></i><span class="label label-primary">{{ items.porpagar }}</span></a> <a href="/admin1/admsolicitudes" class="icon-info" style="padding-left:5px;"> <i class="fa fa-bell" aria-hidden="true"></i><span class="label label-primary">{{ items.pendientes }}</span></a></li><li>Hola</li>',
  data: {
    currentBranch: 'dev',
    items: null
  },
  created: function () {
    this.fetchData();
  },
  methods: {      	
    fetchData: function () {
	    var self = this;
	    var _sedes_id=+$("#sedes_id").val()
	    $.get( '/solicitudpendiente/'+_sedes_id, function( data ) {
	        self.items = data;
	    });
	    setTimeout(this.fetchData, 10000);
	}
  }
});
