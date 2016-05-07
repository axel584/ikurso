{if $data|count_words > 25}
<br />
<a id="i{$i}"></a>

<span
	id="interest" 
	onmouseover="pointer(this)"
	onclick="displayInterest( this, '{$i}');" 
>
<span>+</span> {$link|translate}
</span>

<div id="interestcontent" style="display:none">
	
	<table align="center">
	<tr><td>
		{$data}
	</td></tr></table>

</div>
{/if}