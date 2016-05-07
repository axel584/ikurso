<!-- include file=admin/form.tpl -->
{include file=admin/form_header.tpl}
{literal}
<style type="text/css">
.pdfTrSelected {
	background-color: #fbc074;
}
TABLE.pdfTableLine {
	border: 0;
}
TABLE.pdfTableLine TD {
	border: 0;
}
.pdfPlusMoins {
	width: 20px;
}
</style>
{/literal}
<div align="center">
	<form {$form_data.attributes}>
	<input type="hidden" name='form_site_admin' value="{$siteAdmin}">
	<input type="hidden" name='form_id' value="{$pdfId}">
	<script type="text/javascript" src="./themes/default/include/pdf_config.js"></script>

	Parametrage des PDF<br />
	
<script type="text/javascript">


var cleDstPage = "P";

var tabSrc = new Array();
var tabDst = new Array();
var nbPageSelected = -1;
var nbPageDstKey = -1;

var tabSrcByKey = new Array();
var nbSrc = 0;
var nbDst = 0;

var langContinent = new Array;
var sepContinent = " ,";
var msgContinent = "Empty, eur, afr, asi, oce, ams, amn";

langContinent[""] = "Monde";
langContinent["eur"] = "{'eur'|translate}";
langContinent["afr"] = "{'afr'|translate}";
langContinent["asi"] = "{'asi'|translate}";
langContinent["oce"] = "{'oce'|translate}";
langContinent["ams"] = "{'ams'|translate}";
langContinent["amn"] = "{'amn'|translate}";

{foreach from=$choix_pdf item=raw name=boucle key=keyChapter}
	{if $raw.PAG=='true'}
{assign var=pageKey value=$keyChapter}
tabSrc[nbSrc++] = new ChoixChapter("{$keyChapter}", "{$keyChapter}", "{$raw.TIT|translate}", "false", "false", true, "{$raw.PAR1}");
	{else}
tabSrc[nbSrc++] = new ChoixChapter("{$pageKey}", "{$keyChapter}", "{$raw.TIT|translate}", "{$raw.ALL}", "{$raw.INT}", false, "{$raw.PAR1}");
	{/if}
tabSrcByKey["{$keyChapter}"] = tabSrc[nbSrc-1];
{/foreach}
/*
{foreach from=$pdf->pdfParam item=raw key=keyChapter}
{if ($keyChapter != "0")}
if (tabSrcByKey["{$keyChapter}"].isPage) nbPageSelected++;
tabDst[nbDst++] = new ChoixChapter(cleDstPage+nbPageSelected, "{$keyChapter}", tabSrcByKey["{$keyChapter}"].lib, "{$raw.0}", "{$raw.1}", tabSrcByKey["{$keyChapter}"].isPage);
{/if}
{/foreach}
*/
//alert(tabDst[1].keyParent + " - " + tabDst[1].isPage);
//alert(tabDst[2].keyParent + " - " + tabDst[2].isPage);

</script>	
<table border="1" width="100%">
<TR>
<TD valign="top" width="50%">
<table class="resultats" width="100%">
<tbody id="srcTabBody">
</tbody>
</table>
</TD>
<TD><input type="button" value=" >> " onClick="addLine ()">
<br><br>
<input type="button" value=" << " onClick="removeLine ()"></TD>

<TD valign="top" width="50%">
<table class="resultats" width="100%">
<tbody id="dstTabBody">
</tbody>
</table>
</TD>
<TD align="center"><input type="button" value=" Up " onClick="upLine ()"><br><br>
<input type="button" value=" Down " onClick="downLine ()"></TD>
</TR>
</TABLE>

<textarea id="Result" rows="10" cols="100"></textarea>

<script type="text/javascript">
writeTab ("srcTabBody", tabSrc, cleFldSrc);
writeTab ("dstTabBody", tabDst, cleFldDst);

closeAll(tabSrc, cleFldSrc);
closeAll(tabDst, cleFldDst);
</script>
<!--
	<br>
	<table cellpadding="5" align="center" id="detail">
	<TR>
	<TD><b>PDF Name : </b></TD>
	<TD colspan="3">&nbsp; <input type="text" name="form_name" value="{$pdf->pdfName}" size="50" maxlength="80"></TD>
	</TR>
	{foreach from=$choix_pdf item=raw name=boucle key=keyChapter}
	<TR>
	<TD>{if $raw.PAG=='true'}<B>{else}&nbsp;&nbsp;&nbsp;&nbsp;{/if}{$raw.TIT|translate}{if $raw.PAG=='true'}</B>{/if}</TD>
	{if $raw.PAG=='true'}
	<TD colspan=3>&nbsp; <input type="checkbox" name="{$keyChapter}" value="1" {if $pdf->pdfParam.$keyChapter}checked="true"{/if}>Add new page (with title)</TD>
	{else}
		<TD>&nbsp; <input type="checkbox" name="{$keyChapter}" value="1" {if $pdf->pdfParam.$keyChapter}checked="true"{/if}>Show</TD>
		<TD>&nbsp;
		{if $raw.INT=='true'}
		<input type="checkbox" name="{$keyChapter}I" value="1" {if $pdf->pdfParam.$keyChapter.0=="true"}checked="true"{/if}>Show interest
		{/if}</TD>
		<TD>&nbsp;
		{if $raw.ALL=='true'}
		<input type="checkbox" name="{$keyChapter}A" value="1" {if $pdf->pdfParam.$keyChapter.1=="true"}checked="true"{/if}>Show all
		{/if}
		</TD>
	{/if}
	</TR>
	{/foreach}
	</table>
	-->
	<div class="boutonsAction">
	<!-- {$form_data.submit.html} -->
	<!-- input name="default" value="Default" type="button" onclick="if (confirm('Do you want to set default pdf ?')) location.href='./index.php?mod=view_pdf_config&action=mod&idPdf={$pdfId}&adminsite={$siteAdmin}&default=true';"/ -->
	<input name="test" value="Test" type="button" onclick="writeResult()"/>
	{if $mod=='admin'}
	<!-- {$form_data.back.html} -->
	{/if}
	</div>
	</form> 
</div>
