{if $level == 1}
<script type="text/javascript" src="./themes/default/include/misc.js"></script>
	<link href="./themes/default/css/styles.php?dir={'text_dir'|translate}" rel="stylesheet" type="text/css" />	
{/if}
<table class="sub{$level}" border=0 cellpadding="0" cellspacing="0" width="100%">
{counter print=false assign=cwtb start=0}
{foreach from=$zoom[$idtouse].1 key=key item=info}

{if !($info.type == 'file' && $idtouse != "sum")}
	<tr  
	onmouseover="colorow(this, {if $info.type == 'category'}'category'{else}'page'{/if},'#eaf5ff');" 
	onmouseout="uncolorow(this);" 
	{if $info.type == 'category'}
	class="cate" 
	onclick="loadPagesDetails('{$url_pages_details}&amp;mod=view_pages_details&amp;idtouse={$idtouse}&amp;c_id_zoom={$info.id}', this);"
	{elseif sizeof($info.vars) != 0 && $idtouse == 'sum'}
	onclick="displayVariables( findNextWithType( this.firstChild, 'TD'));"
	
	{/if}
	>
	{counter print=false assign=cwtb}
		<td class="data {if $cwtb==1}wtb{/if}  wrb">
		
			{if $info.type == 'category'}
				<img src="./themes/default/images/groupa.gif">
			{/if}
			
			{$info.data|truncate:65:"..."}
			{if $info.type == 'file'}
				<img src="./themes/default/images/download.png">
			{/if}

	{if sizeof($info.vars) != 0 && $idtouse == 'sum'}
		
		<span style="cursor: pointer;color:red;font-size: x-small; vertical-align: 50%;" onmouseover="pointer(this)" 
			{if $info.type == 'category'}onclick="displayVariables( this.parentNode );"{/if}>
		+
		</span>
		
		<div style="display: none;">
				<table cellspacing=0 align="right" id="variables">
				<th colspan="2">
				{'generique_variables'|translate}
				</th>
				{foreach from=$info.vars key=var_name item=a_var}
					<tr><td colspan="2" class="header">{$var_name}</td></tr>
					{foreach from=$a_var key=var_value item=var_count}
					<tr><td class="data">{$var_value}</td><td class="nb"> {$var_count}</td></tr>
					{/foreach}
				{/foreach}
				</table>
		</div>
	{/if}

		</td>

		<td width="15%" class="acenter {if $idtouse == "sum" || $idtouse == "exit" || $idtouse == "sumtime"}wrb{/if} {if $cwtb==1}wtb{/if}" id="c{$idtouse}{$info.id}">
		{if $idtouse == "sumtime"}
			{$info.$idtouse|time}
		{else}
			{$info.$idtouse}
		{/if}
		</td>
	
	{if $idtouse == "sum"}
		<td width="15%" class="acenter {if $cwtb==1}wtb{/if} wrb" >{$info.percentn1|print_percent} <small>({$info.sumn1})</small></td>
		<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.percentn2|print_percent} <small>({$info.sumn2})</small></td>
	{/if}	
	{if $idtouse == "exit"}
		<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.exitrate|string_format:"%.2f"} %</td>
	{/if}
	{if $idtouse == "sumtime"}
		<td width="15%" class="acenter {if $cwtb==1}wtb{/if}">{$info.avgtime|time}</td>
	{/if}
	</tr>
{/if}
{/foreach}
</table>
