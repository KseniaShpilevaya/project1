<?php
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $months / $num_languages, '<br>', $days_per_language;

