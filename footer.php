		</div>

        <div id="rodape">
            <div class="conteudo">
                <ul class="nav">
                    <li><a href="http://spiceworks.tre-pi.gov.br:8000/portal">ABRIR ATENDIMENTO</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>sobre-a-central-de-servicos">INFORMA&Ccedil;&Otilde;ES</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>categoria/noticias">NOT&Iacute;CIAS</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>categoria/tutoriais">TUTORIAIS</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>parque-computacional">PARQUE COMPUTACIONAL</a></li>
                    <li><a href="<?php echo home_url( '/' ); ?>fale-conosco">FALE CONOSCO</a></li>
                </ul>

                <br clear="all" />

                <div class="logo">
                    <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ); ?>">
                        <img src="<?php bloginfo('template_directory') ?>/images/logo_rodape.jpg" alt="<?php bloginfo( 'name' ); ?>" />
                    </a>

                    <p>Tribunal Regional Eleitoral do Piau&iacute;<br />
                        Pra&ccedil;a Desembargador Edgar Nogueira, s/n. Centro C&iacute;vico - Teresina - Piau&iacute; CEP: 64000-830</p>
                </div>

            </div>
        </div>
		
		<script type="text/javascript">
		function popup(caminho,nome,largura,altura,rolagem) {
			var esquerda = (screen.width - largura) / 2;
			var cima = (screen.height - altura) / 2 -50;
			window.open(caminho,nome,'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=' + rolagem + ',resizable=yes,copyhistory=no,top=' + cima + ',left=' + esquerda + ',width=' + largura + ',height=' + altura);
		}
		</script>
		
		<?php wp_footer(); ?>
		
		<!-- Piwik -->
		<script type="text/javascript">
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://mysql.tre-pi.gov.br/piwik/" : "http://mysql.tre-pi.gov.br/piwik/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 5);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
		</script><noscript><p><img src="http://mysql.tre-pi.gov.br/piwik/piwik.php?idsite=5" style="border:0" alt="" /></p></noscript>
		<!-- End Piwik Tracking Code -->
    </body>
</html>
