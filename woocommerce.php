<!-- 
Copyright 2013 Daniel Blair

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
-->
<?php
/*
Template Name: Woocommerce
*/
?>
<?php get_header(); ?>
	<div id="container" class="clearfix">
		<div id="content-wrap">
			<style type="text/css">
				.bitcointips-widget{
					display: none;
				}
			</style>
			<?php woocommerce_content(); ?>
		</div>
	</div>
<?php get_footer(); ?>
