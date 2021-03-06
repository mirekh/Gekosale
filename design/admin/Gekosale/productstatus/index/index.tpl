{% extends "layout.tpl" %}
{% block content %}
<h2><img src="{{ DESIGNPATH }}_images_panel/icons/modules/status-list.png" alt=""/>{% trans %}TXT_PRODUCTSTATUS_LIST{% endtrans %}</h2>


<ul class="possibilities">
	<li><a href="{{ URL }}{{ CURRENT_CONTROLLER }}/add" class="button" title="{% trans %}TXT_ADD_PRODUCT_STATUS{% endtrans %}"><span><img src="{{ DESIGNPATH }}_images_panel/icons/buttons/add.png" alt=""/>{% trans %}TXT_ADD_PRODUCT_STATUS{% endtrans %}</span></a></li>
</ul>

<div class="block">
	<div id="list-productstatus"></div>
</div>

<script type="text/javascript">
   
   
   
   /*<![CDATA[*/
   
    function editProductStatus(dg, id) {
    location.href = '{{ URL }}{{ CURRENT_CONTROLLER }}/edit/' + id + '';
	 };

	 function deleteProductStatus(dg, id) {
	 	var oRow = theDatagrid.GetRow(id);
		var title = '{% trans %}TXT_DELETE{% endtrans %}';
		var msg = '{% trans %}TXT_DELETE_CONFIRM{% endtrans %} <strong>' + oRow.name +'</strong> ?';
		var params = {
			dg: dg,
			id: id
		};
		var func = function(p) {
			return xajax_doDeleteProductStatus(p.dg, p.id);
		};
    new GF_Alert(title, msg, func, true, params);
	 };
	 
	 function deleteMultipleProductStatuses(dg, ids) {
		var title = '{% trans %}TXT_DELETE{% endtrans %}';
		var msg = '{% trans %}TXT_DELETE_CONFIRM{% endtrans %} ' + ids.join(', ') + '?';
		var params = {
			dg: dg,
			ids: ids
		};
		var func = function(p) {
			return xajax_doDeleteProductStatus(p.dg, p.ids);
		};
    new GF_Alert(title, msg, func, true, params);
	 };
	 
    var theDatagrid;
    
   $(document).ready(function() {
		
		var column_id = new GF_Datagrid_Column({
			id: 'idproductstatus',
			caption: '{% trans %}TXT_ID{% endtrans %}',
			appearance: {
				width: 90,
				visible: false
			},
			filter: {
				type: GF_Datagrid.FILTER_BETWEEN,
			}
		});
		
		var column_name = new GF_Datagrid_Column({
			id: 'name',
			caption: '{% trans %}TXT_NAME{% endtrans %}',
			filter: {
				type: GF_Datagrid.FILTER_INPUT,
			}
		});
		
	    var options = {
				id: 'productstatus',
				mechanics: {
					key: 'idproductstatus',
					rows_per_page: {{ globalsettings.interface.datagrid_rows_per_page }}
				},
				event_handlers: {
					load: xajax_LoadAllProductstatus,
					delete_row: deleteProductStatus,
					edit_row: editProductStatus,
					delete_group: deleteMultipleProductStatuses,
					{% if globalsettings.interface.datagrid_click_row_action == 'edit' %}
					click_row: editProductStatus
					{% endif %}
				},
				columns: [
					column_id,
					column_name
				],
				row_actions: [
					GF_Datagrid.ACTION_EDIT,
					GF_Datagrid.ACTION_DELETE
				],
				group_actions: [
					GF_Datagrid.ACTION_DELETE
				],
				context_actions: [
					GF_Datagrid.ACTION_EDIT,
					GF_Datagrid.ACTION_DELETE
				]
	    };
    
   	  theDatagrid = new GF_Datagrid($('#list-productstatus'), options);
		
	 });
   
   /*]]>*/
   
   
   
  </script>
{% endblock %}