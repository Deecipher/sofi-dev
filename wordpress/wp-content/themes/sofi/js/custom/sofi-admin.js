// SOFI Custom Admin JS

jQuery(document).ready(function($) {
	$("#_resource_type").change(function(){
		$( "#_resource_type option:selected").each(function(){
			if($(this).attr("value")===""){
				$(".cmb2-id--resource-doc").slideUp();
				$(".cmb2-id--resource-video").slideUp();
			}
			if($(this).attr("value")=="doc"){
				$(".cmb2-id--resource-doc").slideDown();
				$(".cmb2-id--resource-video").slideUp();
			}
			if($(this).attr("value")=="vid"){
				$(".cmb2-id--resource-doc").slideUp();
				$(".cmb2-id--resource-video").slideDown();
			}
		});
	}).change();
});