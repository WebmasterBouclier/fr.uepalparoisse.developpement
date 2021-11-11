{crmStyle ext=civipdev file=css/sommaire-civiparoisse.css}

<div class="page-sommaire-wrapper">
	{foreach from=$TestDashboard key=k item=row}
	<div class ="page-sommaire-box">
		<a href="{crmURL p="civicrm/`$row.URL`"}">
			<div><img src="{crmResURL ext=civipdev file=$row.Logo}" alt="{$row.Titre}" /></div>
			<div>{$row.Titre}</div>
		</a>
	</div>
	{/foreach}
</div>



