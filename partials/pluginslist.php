<script type="text/javascript">
	jQuery.switcher("input[class=siwtchers]");
	function cbClick(trigger,cbID)
	{
		if(typeof trigger!="undefined" && trigger)
		{
			var checked=(jQuery(trigger).hasClass("checked"));
			var cb=document.getElementById(cbID);
			
			if(typeof cb!="undefined" && (cb && String(cb.nodeName).toLowerCase()=="input" && String(cb.type).toLowerCase()=="checkbox"))
			{
				cb.checked=(!checked);
			}
			if(checked===true)
			{
				jQuery(trigger).removeClass("checked");
			}
			else
			{
				jQuery(trigger).addClass("checked");
			}
		}
	}
	function cbAll(element){
		print_r($this->options["updates"]);
		if(element.hasClass('mlw-checked')){
			jQuery('.wphpuw_plugins_table .wphpuw_checkbox').each(function(){
				var checked=(jQuery(this).hasClass("checked"));
				var cbID = jQuery(this).attr('data-id');
				var cb=document.getElementById(cbID);			
				if(typeof cb!="undefined" && (cb && String(cb.nodeName).toLowerCase()=="input" && String(cb.type).toLowerCase()=="checkbox"))
				{
					cb.checked=(!checked);
				}
				jQuery(this).removeClass("checked");
				element.removeClass("mlw-checked");
			});
		}
		else {
			jQuery('.wphpuw_plugins_table .wphpuw_checkbox').each(function(){
				var checked=(jQuery(this).hasClass("checked"));
				var cbID = jQuery(this).attr('data-id');
				var cb=document.getElementById(cbID);			
				if(typeof cb!="undefined" && (cb && String(cb.nodeName).toLowerCase()=="input" && String(cb.type).toLowerCase()=="checkbox"))
				{
					cb.checked=(!checked);
				}
				jQuery(this).addClass("checked");
				element.addClass('mlw-checked');
			});
		}
	}
	</script>
	<div class="wrap">
		<h3><?php _e("OPTION_UPDATES_HEADING","wphpuw");?><p id="mlw-right-button" onclick="cbAll(jQuery(this))" class=""></p></h3>
		<table class="wphpuw_plugins_table">
		
		<tbody>
		<?php
		foreach($list->items as $plugin_file => $plugin_data)
		{?>
		<tr>
			<td><h4><?php echo $plugin_data['Name'];?></h4></td>
			<td><div class="onoffswitch"><input type="checkbox" name="options[updates][]" value="<?php echo esc_attr($plugin_file);?>" <?php echo ((in_array($plugin_file,$this->options["updates"])?' checked="checked"':'')); ?> id="plu_<?php echo base64_encode($plugin_file);?>"  class="onoffswitch-checkbox"/>
			<label class="onoffswitch-label" for="plu_<?php echo base64_encode($plugin_file);?>"></label>
			</div>

			<!--<div data-id="plu_<?php echo base64_encode($plugin_file);?>" class="wphpuw_checkbox<?php echo ((in_array($plugin_file,$this->options["updates"])?' checked':'')); ?>" onclick="cbClick(this,'plu_<?php echo base64_encode($plugin_file);?>')"></div>-->
			</td>
		</tr>
		<?php	
		}
		?>
		</tbody>
		</table>
	</div>
	<input type="hidden" name="WP_HPUW_update" value="1">