{if $cookie_no_stat}
{assign var=text value='admin_etatcookienon'|translate}
{assign var=link value='admin_prendreencompteadmin'|translate}
{else}
{assign var=text value='admin_etatcookieoui'|translate}
{assign var=link value='admin_nepasprendreencompteadmin'|translate}
{/if}
<h3>{'admin_cookieadmin'|translate}</h3>
<p class="texte">{'admin_cookienavigateur'|translate}</p>
<div class="centrer">
<p class="texte">
<em>{$text}</em>
<br><br>
<strong><a href="{$url_current}&confirmed=1">{$link}</a></strong>
</p>
</div>