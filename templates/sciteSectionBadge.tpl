
{**
 * plugins/generic/sciteAnalytics/sciteSectionBadge.tpl
 *
 * Copyright (c) 2023 Jamie Farquharson - Université de Strasbourg
 * Developed for Volcanica https://www.jvolcanica.org
 *
 * scite_ Section Badge plugin.
 *
 *}

<div class="panel-default pkp_block">
    <div class="panel-heading">Smart Citations via <a "https://scite.ai/">scite_</a></div>
        <div class="scite-badge"
                 data-doi="{$DOI|escape}"
                 data-show-zero="true"
                 data-tooltip-placement="right"
                 data-small="false"
                 data-show-labels="true"
                 data-tally-show="false"
                 data-section-tally-show="true"
                 data-chart-type="donut"
                 data-section-tally-layout="vertical">
        </div>
        <script async type="application/javascript" src="https://cdn.scite.ai/badge/scite-badge-latest.min.js">
        </script>

</div>
