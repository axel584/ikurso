<!-- menu -->
<ul id="menu">
{foreach from=$menu key=menuIndex item=info}
	<li>
		<a href="{$url_mod}&amp;mod={$info.modname}">{$info.lang|translate}</a>
		<ul>
		{foreach from=$info.submenus key=itemIndex item=lang}
			<li>
				<a href="{$url_mod}&amp;mod={$info.modname}#a{$itemIndex + 1}">
				{$lang|translate|replace:" ":"&nbsp;"}
				</a>
			</li>
		{/foreach}
		</ul>
	</li>
{/foreach}
</ul>
<!-- /menu -->