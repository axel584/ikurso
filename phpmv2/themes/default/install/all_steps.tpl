<ul>
{foreach from=$steps key=id item=step_name}
{if $step_number > $id+1}
<li class="pastStep">{$step_name|translate}</li>
{elseif $step_number ==$id+1}
<li class="actualStep">{$step_name|translate}</li>
{else}
<li class="futureStep">{$step_name|translate}</li>
{/if}
{/foreach}
</ul>