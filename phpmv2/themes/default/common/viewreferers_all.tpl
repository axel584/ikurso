<h1>{'affluents_titre'|translate}</h1>

<div class="centrer">
{counter name=a}
<a id="a{$a}"></a>
<h3>{'affluents_recapimg'|translate}</h3>
<img src="{$url_mod}&mod=view_graph&graph_type=4&graph_data=referers_summary">
</div>

<!-- Referer Type Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetstype'
	data=$typeinterest
	template="common/display_data_array_interest.tpl"
}

<!-- Search Engines -->
{counter name=a}
{pmv_data_array
	headline='affluents_moteurs'
	lang_no_visit='affluents_aucunmoteur'
	text='affluents_nbparmoteur'|translate:$numbers.searchengines
	data=$searchengines
	template="common/display_data_array.tpl"
}

<!-- Search engines Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetsmoteurs'
	data=$searchenginesinterest
	template="common/display_data_array_interest.tpl"
}


<!-- Keywords -->
{counter name=a}
{pmv_data_array
	headline='affluents_motscles'
	lang_no_visit='affluents_aucunmoteur'
	text='affluents_nbmotscles'|translate:"<strong>`$numbers.keywords`</strong>"
	data=$keywords
	lang_no_visit='affluents_aucunmoteur'
	template="common/display_data_array.tpl"
}

<!-- Keywords Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetsmotscles'
	data=$keywordsinterest
	template="common/display_data_array_interest.tpl"
}

<!-- Sites -->
{counter name=a}
{assign var=strsites value='affluents_nbautressites'|translate:$numbers.sites}
{assign var=strdistinctsites value='affluents_nbautressitesdiff'|translate:"<strong>`$numbers.distinctsites`</strong>"}
{pmv_data_array
	headline='affluents_sitesinternet'
	lang_no_visit='affluents_aucunautresite'
	text="$strsites <br/><br/>$strdistinctsites"
	data=$sites
	template="common/display_data_array.tpl"
}

<!-- Sites Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetssitesinternet'
	data=$sitesinterest
	template="common/display_data_array_interest.tpl"
}

<!-- Partners -->
{counter name=a}
{pmv_data_array
	headline='affluents_partenaires'
	lang_no_visit='affluents_aucunpartenaire'
	text='affluents_nbpartenaires'|translate:$numbers.partners
	data=$partners
	template="common/display_data_array.tpl"
}

<!-- Partners Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetspartenaires'
	data=$partnersinterest
	template="common/display_data_array_interest.tpl"
}


<!-- Newsletters -->
{counter name=a}
{pmv_data_array
	headline='affluents_newsletters'
	lang_no_visit='affluents_aucunnewsletter'
	text='affluents_nbnewsletters'|translate:$numbers.newsletters
	data=$newsletters
	template="common/display_data_array.tpl"
}

<!-- Newsletters Interest -->
{counter name=i}
{pmv_data_array
	link='affluents_interetsnewsletters'
	data=$newslettersinterest
	template="common/display_data_array_interest.tpl"
}

<!-- Direct -->
{counter name=a}
<a id="a{$a}"></a>
<h3>{'affluents_entreedirecte'|translate}</h3>
{'affluents_nbentreedirecte'|translate:$numbers.direct}