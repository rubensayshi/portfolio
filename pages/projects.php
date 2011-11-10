<p>
	I really love doing side projects, they often allow for a lot of freedom! <br />
	For a list of projects I've done for clients you should check out the <a href="<?php echo url("portfolio"); ?>">portfolio</a> page, this page only lists my personal projects.<br />
	For a lot of projects you can only find some code on github, if you want to see the projects in action I'd be happy to show you since most are running on my laptop! <br />
</p>

<h4 class="long">Voiture</h4>
<ul>
	<li><a href="http://voiture.hoppinger.com">Voiture documentation website</a></li>
</ul>
<p>
	Drupal is strongly build and focused towards being able to stack a lot of contrib modules on top of each other, all managed through a web interface. <br />
	All the configuration is stored in the database and mixed in with the content, as a result it becomes very hard to capture the configuration (which contains / powers a lot of functionality) in version control. <br />
	To be able do automated deployment for a Drupal project, working on a local environment, deploying test release, live release, hotfixes and such we either needed a can of cheap students to do everything by hand withouth any errors or <strong>voiture</strong>! <br />
	<br />
	We've created tools to split the configuration from the database, place it in version control and push it back into the database on other environments!<br />
	Checkout the documentation website for a lot more information! <br />
	<br />
	Maybe our fight against Drupal was hard and made my brain hurt sometime, but in the end the result was well worth it and we got to do some presentations about it in the process! <br />
	
	<ul>
		<li>Drupal</li>
		<li>Automated deployment</li>
		<li>Community</li>
		<li>Presentation</li>
	</ul>
</p>

<h4 class="long">NodeJS</h4>
<p>
	I love javascript and I love NodeJS! <br />
	If you check out my github account you'll notice a lot of small NodeJS projects and some forks and watches of other NodeJS projects. <br />
	Unfortunatly I haven't gotten a chance to use it for a real project and get a webapplication in production using NodeJS yet, but I hope someday I'll get a chance! <br />
</p>

<h5>Timerime reloaded</h5>
<ul>
	<li><a href="https://github.com/rubensayshi/node-timerime-reloaded">Project on github</a></li>
</ul>
<p>
	During my time at Hoppinger I've done a lot of maintanance on the <a href="http://www.timerime.com">timerime</a> website. <br />
	Unfortunatly some bad choices in the early development and a lot more growth then anticipated cause this website to run into a lot performance issues! <br />
	<br />
	Combining that with my ever lasting search of a real project which I could do with NodeJS, I've created a small prototype called 'timerime reloaded' with NodeJS and MongoDB. <br />
</p>

<h5>MyBench</h5>
<ul>
	<li><a href="https://github.com/rubensayshi/mybench">Project on github</a></li>
</ul>
<p>
	So during my quest to find a real project for NodeJS I wanted to benchmark some pieces of code and to do so I created a small tool which can startup a NodeJS application and run apache benchmark against it! <br />
</p>

<h4 class="long">Symfony2</h4>
<p>
	During my quest for the most awesome PHP framework out there I came across Symfony1.4 and in my eyes it was ahead of the other frameworks by miles, not to mention that it's documentation is superb! <br />
	I was planning to build a custom webapplication myself based on Symfony1.4 but around that time the development of Symfony2 had reached the first Preview Release and since I wanted to move towards the future instead of living in the paste I decided to use that instead.
</p>
<p>
	It was a lot of fun following the Symfony2 development (and trying to adapt my webapplication to the new releases everytime) and trying to get involved with the community. <br />
	During that time I learned SO MUCH about object orientated programming and the various design patterns Symfony2 uses that I've seriously grown as much in skill as I have in the time between my graduation and before I discovered Symfony (which is about 3 years). <br />
	It's hard to really contribute code to such a community but given that if I would keep doing real projects using Symfony2 I've now reached the point that I could really contribute a Bundle (it's how they call their modules) to the community! <br />
</p>
<p>
	Looking at the projects in my github account you'll notice some forks with minor bug fixes and my involvement is some interesting discussions (also on the google mailing lists for symfony).
</p>

<h5>GoGreat</h5>
<ul>
	<li><a href="https://github.com/rubensayshi/gogreat-self">Project on github</a></li>
</ul>
<p>
	The application I was planning to build would have become a system which would allow you to create your own website with a simple process. <br />
	Unfortunatly my good idea came at a bad time and I did not have the time and energy to push it through. <br />
	The code in this project is mostly all my tries at keeping up with the development of Symfony2 and building a small CMS on top of it. <br />

	<strong>I intend to get this site up and running again as a demo once my portfolio is done.</strong>
</p>

<h5>Development tools v0.1</h5>
<ul>
	<li><a href="https://github.com/rubensayshi/sf2CMS">Project on github</a></li>
</ul>
<p>
	This project contains a clean version of the symfony standard distribution with some tools along side for easier development. <br />
	It contains some bash tools (in `bin/self`) which help during development and once I update them with the ones I have in another (closed source) project they'll also contain tools to help with deployment. <br />
	Other then that it also has the same configuration structure as <i>Voiture</i> inside the `cnf` directory and a vendor bundle I've created to load that config. <br />

	<strong>The first thing I will do when I have enough free time in a weekend and feel like coding is getting this bundle cleaned and more inline with the symfony way of doing things!</strong>
</p>
