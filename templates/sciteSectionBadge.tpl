
{**
 * plugins/generic/sciteAnalytics/sciteSectionBadge.tpl
 *
 * Copyright (c) 2023 Jamie Farquharson - Université de Strasbourg
 * Developed for Volcanica https://www.jvolcanica.org
 *
 * scite_ Section Badge plugin.
 *
 *}

<div class="scite-badge"
     data-doi="{$DOI|escape}"
     data-show-zero="false"
     data-small="false"
     data-show-labels="false"
     data-tally-show="false"
     data-section-tally-show="true"
     data-chart-type="donut"
     data-section-tally-layout="vertical">
</div>
<script async type="application/javascript" src="https://cdn.scite.ai/badge/scite-badge-latest.min.js">
</script>