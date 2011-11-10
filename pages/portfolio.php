<p>
	During my fairly short carreer so far I've already done dozens of projects for clients and I'm pretty sure I've already forgotten about a few! <br />
	In my portfolio I'll list some which are worth mentioning, unfortunatly since these are projects for clients most (if not all) are closed source. <br />
	The list starts with the most recent projects.
</p>

<h4 class="long">RTVRijnmond<small>Hoppinger</small></h4>
	<ul>
		<li><a href="http://www.rijnmond.nl">Beta website</a></li>
</ul>
<p>
	We've developed a new wesite for the local (tv and radio) broadcasting station in Rotterdam. <br />
	They're the largest local broadcasting station in the Neterlands and already have a high load on their current website and are aiming for a lot more with their new website. <br />
	<br />
	The website is based on Drupal 6 and a big pile of modules which have already been developed by another company so that all the local broadcasting stations can use the same base and the idea was that this would save them on development costs. <br />
	Unfortunatly the modules are of average Drupal contrib quality which comes down to most being very bloated and the only thing saving the performance of the website is using insanely aggresive cache settings. <br />
	<br />
	We've ditched most modules provided and rewrote many to fit the specific needs of RTVRijnmond. <br />
	Most noticably is the rewritten import modules (for all the content from the old site) going from about 4~5 days of import time to just 2 hours! <br />
	Somehow other broadcasting stations (and the developers) found running import scripts for days acceptable, we didn't! How would you even go testing that?! <br />
	<br /> 
	The website is curently in development and we're soon releasing a (public) beta. <strong>This website won't be live untill 29 november!</strong><br />
	<br />
	On the side I've also created a small webapplication which allows partners / relations of RTVRijnmond to maintain their 'teletext' pages. <br />
	Luckily we were allowed to build this with Symfony2 and I also threw in twitter bootstrap just to give it and shot (and loved it!). <br />
	<ul>
		<li>Drupal6</li>
		<li>Varnish</li>
		<li>Capistrano</li>
		<li>Symfony2</li>
		<li>Twitter Boostrap</li>
	</ul>

</p>

<h4 class="long">Gites<small>Hoppinger</small></h4>
	<ul>
		<li><a href="http://www.gites.nl">Gites website</a></li>
</ul>
<p>
	Gites is a very special relation for Hoppinger since they share the same owners (sort of). <br />
	It's a webapplication which allows house owners to advertise for rental or sale of their vacation houses in france. <br />
	The previous website had become rather old and maintaining it (for which I was the main developer) became more and more problematic, let alone developing new features for it! <br />
	<br />
	For the new website (version 5!) we started from scratch and rebuild all the old features, ofcourse not before making new interaction and graphical designs. <br />
	Over time the website has grown so much and the amount of functionality we had te reimplement was huge! <br />
	The website contains a frontend for visitors, a backend for the owners of the houses, a backend / admin system for the administrators of Gites and a automated invoicing chain. <br />
	<br />
	During the start of the project all the developers at Hoppinger were still very 'not invented here' orientated and all projects were build on top of the HoppingerCMS, so was Gites. <br />
	The HoppingerCMS was build to create business websites of small to medium scale and be very flexible to match the needs of the clients. <br />
	It however was not build for a high load website and for Gites we rewrote a lot of the code on the CMS! <br />
	<ul>
		<li>HoppingerCMS</li>
		<li>Invoicing</li>
		<li>Lead developer</li>
	</ul>
</p>

