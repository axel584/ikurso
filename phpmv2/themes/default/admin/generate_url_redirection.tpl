<script language="JavaScript">
function generateUrl()
{ldelim}
   var form = document.urlgenerator;
   var prefix = "{$PREFIX_FILES}";
   var phpmvUrl = "{$PHPMV_URL}/phpmyvisites.php";
   var stringRedirection = "{'admin_url_generate_download_link_example'|translate}";
   // process output
   var url = phpmvUrl + "?url="+ escape(form.urlRedirect.value) + "&id=" + form.site.value + "&pagename=" + prefix + escape(form.pagename.value);
   form.resultUrl.value = url;
   form.resultLink.value = "<a href='"+url+"'>"+stringRedirection+"</a>";
{rdelim}
</script>

<h1>{'admin_url_generate_title'|translate} </h1>
<p class="texte">{'admin_url_generate_intro'|translate} </p>

<form name="urlgenerator">
<div id="urlGeneration">
<ul>
<li>{'admin_url_generate_site_selection'|translate} </li>

<center>
<select name="site" dir="{$dir}">
	<optgroup label="Sites">
	   {foreach from=$sites_view_available key=id item=info}
	   		<option label="{$info}" value="{$id}" {if $site_selected==$id} selected="selected"{/if}>{$info}</option>
	   {/foreach}
	</optgroup>
</select>
</center>
<br/>

<li>{'admin_url_generate_enter_url'|translate} </li>
<br/>
<textarea name="urlRedirect" rows="3" style="width: 520px;" wrap="virtual"></textarea>
<br/>
<small><i>{'admin_url_generate_help_enter_url'|translate} </i></small>
<br/><br/>

<li>
{'admin_url_generate_friendly_name'|translate} </li><br/>
<input name="pagename"  style="width: 520px;" />
<br/>
<small><i>{'admin_url_generate_help_friendly_name'|translate} </i></small>

</ul></div>


<p class="boutonsAction">
<input type="button" value="Generate URL"  tabindex="4" onClick="generateUrl();" />
</p>
<p class="texte">
{'admin_url_generate_result_url'|translate} <br/>
<textarea name="resultUrl" onfocus="this.select();" rows="4" style="width: 520px;" wrap="virtual"></textarea>
</p>

<p class="texte">
{'admin_url_generate_html_result'|translate}  <br/>
<textarea name="resultLink" onfocus="this.select();" rows="4" style="width: 520px;" wrap="virtual"></textarea>
<p>

<p>{'admin_url_generate_image_legend'|translate} </p><br/>
<img alt="{'admin_url_generate_image_legend'|translate}" src="images/help/example-url-redirection-file-download.jpg">
</form>
{include file="admin/go_back.tpl"}