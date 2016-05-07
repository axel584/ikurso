<!-- lang selection -->
<div id="choixlangue">
<form action="{$url_lang}" method="post">

<fieldset>
	<legend> &nbsp; {'generique_langue'|translate}  &nbsp; </legend>

		<select name="lang" onchange="this.form.submit()" dir="{$dir}">
		   {html_options 
		   		options=$langs_available 	
		   		selected=$lang_selected
		   	}
		</select>
</fieldset>
</form>
</div>