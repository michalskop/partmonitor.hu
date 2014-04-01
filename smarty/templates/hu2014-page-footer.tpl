	<div data-role="footer" data-theme="{if isset($partner)}{$partner['swatch_footer']}{else}f{/if}">  
	  <div class="footerContainer"> 
		<div class="right computer" style="position:relative;bottom:5px;>
			<a href="http://kohovolit.eu">
				<img src="../image/klogo.png" title="K-Monitor" alt="K-Monitor"/>
			</a>
		  {if isset($partner) and ($partner['name'] != 'default')}<img src="/image/{$partner['name']}.png">{/if}

		 </div>
	  </div>
	</div>
