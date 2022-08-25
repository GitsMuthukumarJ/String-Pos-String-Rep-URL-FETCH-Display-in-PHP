<?php
													$url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
													$parts = parse_url($url);
													parse_str($parts['query'], $query);
													//print_r($query);
													?>
													
													<?php if (strpos($url,'covid-testing/?') !== false) { ?>
															<h1 style="color:#02adc6;text-align:center;font-size:34px !important;">COVID-19 PCR/ANTIGEN Testing Center Near <?php echo ucwords(str_replace('&', ', ', str_replace('_', ' ', $parts['query']))); ?></h1>
													<?php } else { ?>
															<h1 style="color:#02adc6;text-align:center;font-size:34px !important;">COVID-19 PCR/ANTIGEN Testing Center Near You</h1>
													<?php } ?>
