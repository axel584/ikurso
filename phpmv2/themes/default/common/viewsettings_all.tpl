<h1>{'configurations_titre'|translate}</h1>

<!-- Settings -->
{counter name=a}
{pmv_data_array
	headline='configurations_configurations'
	data=$config
	template="common/display_data_array.tpl"
}

<!-- Os -->
{counter name=a}
{pmv_data_array
	headline="configurations_os"
	data=$os
	template="common/display_data_array.tpl"
}

<!-- Os interests -->
{counter name=i}
{pmv_data_array
	link="configurations_os_interest"
	data=$osinterest
	template="common/display_data_array_interest.tpl"
}

<br /><br />
<div class="centrer">
<img src="{$url_mod}&mod=view_graph&graph_type=3&graph_data=settings_os">
</div>

<!-- Browsers by type -->
{counter name=a}
{pmv_data_array
	headline='configurations_navigateursbytype'
	data=$browserstype
	template="common/display_data_array.tpl"
}

<br /><br />
<div class="centrer">
<img src="{$url_mod}&mod=view_graph&graph_type=3&graph_data=settings_browsers_type">
</div>

<!-- Browsers -->
{counter name=a}
{pmv_data_array
	headline="configurations_navigateurs"
	data=$browsers
	template="common/display_data_array.tpl"
}

<!-- Browsers interests -->
{counter name=i}
{pmv_data_array
	link="configurations_navigateurs_interest"
	data=$browsersinterest
	template="common/display_data_array_interest.tpl"
}

<br /><br />
<div class="centrer">
<img src="{$url_mod}&mod=view_graph&graph_type=3&graph_data=settings_browsers">
</div>


<!-- Plugins -->
{counter name=a}
{pmv_data_array
	headline='configurations_plugins'
	data=$plugins
	template="common/display_data_array.tpl"
}

<br /><br />
<div class="centrer">
<img src="{$url_mod}&mod=view_graph&graph_type=2&graph_data=settings_plugins">
</div>

<!-- Resolution -->
{counter name=a}
{pmv_data_array
	headline='configurations_resolutions'
	data=$resolutions
	template="common/display_data_array.tpl"
}

<!-- Resolution Interest -->
{counter name=i}
{pmv_data_array
	link="configurations_resolutions_interest"
	data=$resolutionsinterest
	template="common/display_data_array_interest.tpl"
}

<br /><br />
<div class="centrer">
<img src="{$url_mod}&mod=view_graph&graph_type=3&graph_data=settings_resolutions">
</div>

<!-- NormalWidescreen -->
{counter name=a}
{pmv_data_array
	headline='configurations_rapport'
	data=$normalwidescreen
	template="common/display_data_array.tpl"
}
