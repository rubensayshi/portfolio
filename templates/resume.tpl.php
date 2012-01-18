<?php if (!isset($_GET['pdf'])): ?>
<h1>Curriculum Vitae</h1>
<p>
	This is my resume, last updated on 16 januari 2012. <br />
	It's curently written in Dutch since I'm also doing my job applications in Dutch. <br />
	Why eventhough the whole website is english? Because I'm using <a href="https://github.com/antialize/wkhtmltopdf">wkhtmltopdf</a> to generate a PDF from this page! <br />
</p>
<p>
	You can download the PDF versions here, they're just the same page with a slightly different wrapper: <br />
	<a href="<?php echo asset("pdf/cv.pdf"); ?>">Normal PDF</a><br />
	<a href="<?php echo asset("pdf/cv_print.pdf"); ?>">Print-friendly PDF</a>
</p>
<?php endif; ?>

<h3>Personalia</h3>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">Naam:</div>
		<div class="span3">Ruben de Vries</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Adres:</div>				
		<div class="span3">Lavendel  13 <br />
						  2951DA Alblasserdam
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Telefoon:</div>
		<div class="span3">06 12227277</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Geboortedatum:</div>
		<div class="span3">6 augustus 1987</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Geboorteplaats:</div>
		<div class="span3">Alblasserdam</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Nationaliteit:</div>
		<div class="span3">Nederlander</div>
	</div>
</div>

<h3>Opleidingen</h3>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span3">Zend PHP 5.3 Certification</div>
		<div class="span1">2011</div>
		<div class="span1">Rotterdam</div>
	</div>
	<div class="row clearfix">
		<div class="span3">HBO Grafimedia Technologie - Hogeschool Rotterdam</div>
		<div class="span1">2004-2008</div>
		<div class="span1">Rotterdam</div>
	</div>
	<div class="row clearfix">
		<div class="span3">HAVO - Willem de Zwijger College</div>				
		<div class="span1">1999-2004</div>	
		<div class="span1">Papendrecht</div>
	</div>
</div>

<h3>Werkervaring</h3>
<h4>Hoppinger</h4>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">Periode:</div>
		<div class="span3">Augustus 2008 - December 2011</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Functie:</div>
		<div class="span3">Senior Webdeveloper</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Adres:</div>
		<div class="span3">Lloydstraat 138c</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Telefoon:</div>
		<div class="span3">010 2210190</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Referentie:</div>
		<div class="span3">Martijn Dragt<br />
							Jochem Maas
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Werkzaamheden:</div>
		<div class="span3">
			Webdeveloper op veel verschillende projecten. <br />
			Rol varieert tussen Junior Developer tot Senior / Lead Developer.
		</div>
	</div>
</div>

<h4>Restaurant de Poort</h4>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">Periode:</div>
		<div class="span3">Februari 2003 - juli 2008</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Functie:</div>
		<div class="span3">Kok</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Adres:</div>
		<div class="span3">Eind 19
							4201CP Gorinchem
		</div>
	</div>
</div>

<h3>Talen</h3>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">Nederlands</div>
		<div class="span3">Moedertaal</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Engels</div>
		<div class="span3">Gesproken - Redelijk <br />
	    					Geschreven - Goed
	    </div>
	</div>
</div>

<h3>Tools</h3>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">
			Ubuntu / PinguyOS <br />
			CLI <br />
			Apache2 <br />
			
		</div>
		<div class="span3">
			Eclipse / ZendStudio <br />
			nano / vi <br />
			SVN / GIT <br />
			Firefox (Firebug) <br />
			
		</div>
	</div>
</div>

<h3>Kennis binnen vakgebied</h3>
<div class="resume_table">
	<div class="row clearfix">
		<div class="span2">Serverside:</div>
		<div class="span3">PHP, NodeJS<br />
							MySQL (SQLLite, MSSQL), MongoDB<br />
							Linux, Apache2, Varnish, Apache SOLR<br />
							Bash, Ruby, Lingo, XML<br />
							wkhtmltopdf
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Frontside:</div>
		<div class="span3">(X)HTML, HTML5<br />
							CSS, CSS3<br />
							LESS<br />
							Javascript, AJAX<br />
							jQuery, MooTools, Prototype<br />
							Flash
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Frameworks:</div>
		<div class="span3">Symfony2<br />
							ExpressJS
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">CMS:</div>
		<div class="span3">Drupal<br />
							Joomla<br />
							Wordpress
		</div>
	</div>
	<div class="row clearfix">
		<div class="span2">Deployment automation:</div>
		<div class="span3">Voiture (Drupal)<br />
							Capistrano</div>
	</div>
</div>
