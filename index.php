<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>h&k development</title>
	<link rel="icon" href="piccers/icon.ico" type="image/icon" sizes="32x32"/>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$('a').click(function(){
			$('html, body').animate({
				scrollTop: $( $(this).attr('href') ).offset().top
			}, 500);
			return false;
		});
	</script>
</head>
<body>
<a href="#" class="scrollToTop"><i class="material-icons white-text">expand_less</i></a>
	<nav class="blue darken-1 white-text" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">Home</a>
			<ul class="right hide-on-med-and-down">
                <li><a href="#Content">Wie zijn wij</a></li>
				<li><a href="#Locaties">Locaties</a></li>
				<li><a href="#Contact">Contact</a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav tabs blue">
				<div class="row white-text">
					<div class="col s12">
                        <li><a class="white-text" href="#Content">Wie zijn wij</a></li>
					</div>
					<div class="col s12">
                        <li><a class="white-text" href="#Locaties">Locaties</a></li>
					</div>
					<div class="col s12">
						<li><a class="white-text" href="#Contact">Contact</a></li>
					</div>
				</div>
			</ul>
			<a href="" data-activates="nav-mobile" class="button-collapse white-text"><i class="material-icons">menu</i></a>
		</div>
	</nav>

	<div class="parallax-container valign-wrapper">
        <div class="row center"><img class="responsive-img" style="max-width: 100%; max-height: 450px;" src="piccers/logoh&k_wd.png"></div>
		<div class="parallax" ><img src="piccers/codingheader.png" alt="Unsplashed background img 2" ></div>
	</div>

	<div class="container section" style="min-height: 800px">
		<div class="section ">
			<h2 class="center blue-text">Even voorstellen</h2>
			<p id="Content" class="scrollspy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<hr style="border-color: #1e88e5;" />
		</div>
		<div class="section">
			<!--   Over Mij Section   -->
			<div class="row">
				<div class="col s12 m12 ">
					<div class="card grey lighten-5" style="height: 460px;">
						<div class="card-content">
							<span class="card-title blue-text">Wat doen wij?</span>
                            <ul>
                                <li>spraak/articulatie</li>
                                <li>stotteren</li>
                                <li>taal</li>
                                <li>afwijkende mondgewoonten</li>
                                <li>stem</li>
                                <li>adem (o.a. bij COPD, dyspneu, kortademigheid en hyperventilatie)</li>
                                <li>chronisch hoesten</li>
                                <li>lezen- en spelling</li>
                            </ul>
                            <hr style="border-color: #f8bbd0;" >
                            <ul>
                                <li>Een afspraak maken kan <b class="blue-text">zonder verwijzing</b>.</li>
                                <li>Er is geen wachtlijst.</li>
                                <li>Logopedie wordt vergoed door alle verzekeraars.</li>
                                <li>Logopedie <18 jaar wordt volledig vergoed.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
				<p class="blue-text"><b>Mocht u meer willen weten, kunt u op de onderstaande onderwerpen klikken.</b></p>
				<div class="row">
					<div class="col s12 m6 ">
						<ul class="collapsible" data-collapsible="expandable">
							<li class="blue white-text" style="background-image: url(piccers/dropdown1.png); background-position:  50% 0%;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Verwijzing</div>
								<div class="collapsible-body"><span>U kunt uitsluitend door uw huisarts of een specialist (KNO-arts, neuroloog, tandarts, orthodontist of anderen) worden verwezen voor onderzoek of behandeling.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown1.png); background-position: 50% 25%;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Aanmelding</div>
								<div class="collapsible-body"><span>Wanneer u zichzelf of uw kind aanmeldt, zal gevraagd worden waarom diegene logopedie nodig heeft. Soms wordt er voor extra toelichting contact opgenomen met de doorverwijzende specialist. 
								U kunt zich bij mij aanmelden op de gelijknamige pagina.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown1.png); background-position: 50% 50%;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Samenwerking</div>
								<div class="collapsible-body"><span>Ik werk nauw samen met o.a. huisartsen, orthodontisten, KNO-artsen en psychologen. Maar ook met schoolbegeleidingsdiensten en heb direct contact met basisscholen.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown1.png); background-position: 50% 75%;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Privacy</div>
								<div class="collapsible-body"><span>De logopedist neemt kennis van feiten van vertrouwelijke aard. Binnen de logopediepraktijk wordt zorgvuldig omgegaan met deze informatie. Het privacyreglement van de NVLF zal worden nageleefd.</span></div>
							</li>
						</ul>
					</div>
					<div class="col s12 m6">
						<ul class="collapsible" data-collapsible="expandable">
							<li class="blue white-text" style="background-image: url(piccers/dropdown2.png); background-position: 50% 0%;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Behandeling</div>
								<div class="collapsible-body"><span>De eerste afspraak bij de logopedist bestaat uit een vraaggesprek en een onderzoek. Voor een uitgebreid onderzoek zijn meerdere afspraken noodzakelijk. Na het onderzoek wordt de conclusie met u besproken en wordt beslist of er een behandeling volgt. Iedere behandeling duurt een half uur. In de meeste gevallen wordt er één keer per week behandeld. Een andere frequentie is ook mogelijk. Indien nodig kan de behandeling aan huis plaatsvinden. Tijdens de behandeling wordt er geoefend en het is de bedoeling deze oefeningen thuis te herhalen. Het verloop van de behandeling wordt regelmatig met u besproken. Het aantal behandelingen is afhankelijk van de soort en de ernst van de klacht.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown2.png); background-position: 50% 60%;;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Vergoeding</div>
								<div class="collapsible-body"><span>De behandeling wordt geheel of gedeeltelijk vergoed door uw zorgverzekeraar. Soms moet er van tevoren een machtiging worden aangevraagd. Afspraken hierover vindt u in uw polisvoorwaarden. De tarieven voor logopedie zijn wettelijk vastgesteld. In de nieuwe basisverzekering zit logopedie in het basispakket, zowel voor kinderen als voor volwassenen. U kunt er van uitgaan dat de praktijk een contract met alle zorgverzekeraars zal sluiten, tenzij de beroepsvereniging NVLF een negatief advies hierover uitbrengt.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown2.png); background-position: 50% 90%;;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Waarneming</div>
								<div class="collapsible-body"><span>Waarneming kan nodig zijn in verband met ziekte, vakantie en/of studieverlof. Waarneming zal altijd geschieden door een gediplomeerde logopedist.</span></div>
							</li>
							<li class="blue white-text" style="background-image: url(piccers/dropdown2.png); background-position: 50% 110%;9;">
								<div class="collapsible-header blue darken-1"><i class="material-icons">expand_more</i>Klachten</div>
								<div class="collapsible-body"><span>Het klachtenrecht voor patiënten is vastgelegd in de Wet Klachtenrecht Cliënten Zorgsector. Het klachtenrecht van de NVLF is hieraan verbonden. De logopediepraktijk volgt de klachtenregeling van de NVLF.</span></div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<div class="container section">
			<div class="section">
				<!--   Location Section   -->
				<div class="row valign-wrapper">
					<div class="col s12 m12">
						<div class="section ">
							<h2 class="center blue-text">Wie ben ik?</h2>
						</div>
						<div class="col s12 m8">
							<div class="card grey lighten-5">
								<div class="card-content">
									<span class="card-title blue-text">Sylvia Hellingman-Rijnvos</span>
									<hr>
									<table class="whoami">
										<tr>
											<td><b>Leeftijd</b></td>
											<td>55</td>
										</tr>
										<tr>
											<td><b>Opleiding  Logopedist</b></td>
											<td>Amsterdam</td>
										</tr>
										<tr>
											<td><b>sinds</b></td>
											<td>1988</td>
										</tr>
										<tr>
											<td><b>Specialisme</b></td>
											<td>spraak-en taalontwikkeling op gang brengen bij peuters en afwijkend mondgedragbehandeling (i.r.m. een scheef gebit)</td>
										</tr>

									</table>
								</div>
							</div>
						</div>
						<div class="col s12 m4">
							<img src="piccers/jeefs.jpg" alt="" class="circle responsive-img">
						</div>
						<div class="col s12 m12">
							<p>Mijn naam is Sylvia Hellingman-Rijnvos. Ik ben gelukkig getrouwd en ben de trotse moeder van een dochter van 19 jaar en een zoon van 16 jaar oud.

								Sinds 1988 ben ik werkzaam als logopediste.

								In 1988 heb ik in Laren N-H in de praktijk gewerkt van A.Vos en in het verpleeghuis in Oudorp. Het werken in de praktijk beviel mij het beste: je kunt alle logopedische stoornissen behandelen en je werkt met zowel kinderen als volwassenen.

								In 1989 nam ik de praktijk van E. Kramer over in Hoorn en Venhuizen. Aldaar heb ik nauw samengewerkt met kinderfysiotherapeutes. Ineke Heimeriks, 1 van hen, is de grondlegster geweest van de bekende 'motorische remedial teaching'. Door hen en door het volgen van de opleiding 'sensorische integratie' heb ik naar het totale kind leren kijken. In die periode heb ik mij ook gespecialiseerd in de behandeling van dyslectische kinderen.

								Vanaf 1999 woon ik met mijn gezin in Ter Apel. Na 3 jaren pendelen kon ik de praktijk van M. Zijlstra in Ter Apel en Musselkanaal overnemen. In Ter Apel heb ik inmiddels een eigen praktijkgebouw neergezet en in Musselkanaal werk ik prettig in het gebouw achter de kerk "welkom thuis'. Binnenkort komt daar nog de locatie "de Veenhorst" bij. Voor de kinderen van de scholen de Musselhorst en de St. Antoniusschool ben ik dan uitstekend bereikbaar.

								De laatste jaren heb ik veel plezier in het zo vroeg mogelijk behandelen van spraak- en taalproblemen bij peuters. Des te eerder de taalproblemen worden verholpen, des te succesvoller verloopt het schooltraject.

							Ook de vroege behandeling van afwijkende mondgedragingen levert veel op: geen beugel of een veel kortere draagtijd van de beugel van de orthodontist.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
					<h5 class="header col s12 light"></h5>
				</div>
			</div>
		</div>
		<div class="parallax"><img src="piccers/headerwit.png" alt="Unsplashed background img 2"></div>
	</div>

	<div class="container section">
		<div class="section">
			<!--   Location Section   -->
			<div class="row">
				<div class="col s12 m12">
					<div class="section ">
						<h2 class="center blue-text">Locaties</h2>
					</div>
				</div>
				<div class="col s12 m6">
					<div id="Locaties" class="icon-block scrollspy">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2408.874427491614!2d7.085270315980235!3d52.86066421867878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7c1b970d2f8cf%3A0x573f015f07181a0a!2sLogopediepraktijk+Hellingman!5e0!3m2!1snl!2snl!4v1520434869435" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						<h5 class="blue-text">Ter Apel</h5>
						<p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
					</div>
				</div>
				<div class="col s12 m6">
					<div class="icon-block">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38541.993698633254!2d7.052440079101563!3d52.860661000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b7c1b970d2f8cf%3A0x573f015f07181a0a!2sLogopediepraktijk+Hellingman!5e0!3m2!1snl!2snl!4v1520435282890" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						<h5 class="blue-text">Musselkanaal</h5>
						<p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="parallax-container valign-wrapper">
		<div class="section no-pad-bot">
			<div class="container">
				<div class="row center">
				</div>
			</div>
		</div>
		<div class="parallax"><img src="piccers/kids-pencil.jpeg" alt="Unsplashed background img 2"></div>
	</div>

	<div id="Contact" class="container section scrollspy blue-text">
		<div class="section">
			<div class="row">
				<h2 class="center contact">Contact</h2>
					<div class="col col s12 m12 center">
						<div class="card grey lighten-5">
							<div class="card-content black-text Ccontent-height">
								<h4 class="blue-text">Afspraak maken?</h4>
								<span class="flow-text">
                                    Voor aanmeldingen, afspraken en informatie  kunt u met de onderstaande gegevens contact met mij opnemen.
                                    <div class="section">
                                            <p>Huisnummer: <span class="blue-text">0599580081</span></p>
                                            <a class="blue btn-large btn-floating white-text" href="tel:0599580081"><i class="material-icons">local_phone</i></a>
                                    </div>
                                    <div class="section">
                                            <p>Whatsapp: <span class="blue-text">06-29043191</span></p>
                                            <a class="blue btn-large btn-floating white-text" href="https://api.whatsapp.com/send?phone=+31629043191"><i class="material-icons">chat_bubble_outline</i></a>
                                    </div>
                                    <div class="section">
                                            <p>e-mail: <span class="blue-text">s.hellingmanrijnvos@hetnet.nl</span></p>
                                            <a class="blue btn-large btn-floating white-text" href="mailto:s.hellingmanrijnvos@hetnet.nl?SUBJECT=Afspraak"><i class="material-icons">mail_outline</i></a>
                                    </div>
                                </span>
								<span class="flow-text ">
								Telefonisch of per mail kan ik zo spoedig mogelijk een afpsraak maken.
                                Omdat ik geen wachtlijst heb, kan dit zo snel mogelijk en op een tijdstip dat u past.
                                </span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Modal Header</h4>
				<p>A bunch of text</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>

		<footer class="page-footer blue darken-1">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Company Bio</h5>
						<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Settings</h5>
						<ul>
							<li><a class="white-text" href="#!">Link 1</a></li>
							<li><a class="white-text" href="#!">Link 2</a></li>
							<li><a class="white-text" href="#!">Link 3</a></li>
							<li><a class="white-text" href="#!">Link 4</a></li>
						</ul>
					</div>
					<div class="col l3 s12">
						<h5 class="white-text">Connect</h5>
						<ul>
							<li><a class="white-text" href="#!">Link 1</a></li>
							<li><a class="white-text" href="#!">Link 2</a></li>
							<li><a class="white-text" href="#!">Link 3</a></li>
							<li><a class="white-text" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright blue-dar">
			<div class="container">
				Made by <a class="orange-text text-lighten-1" target="_BLANK" href="https://sidoi.nl"><b>Sidoi Klumper</b></a> &amp; <a class="light-green-text text-accent-4" target="_BLANK" href="https://sidoi.nl"><b>Sjihdazi Hellingman</b></a>
			</div>
		</footer>
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="js/materialize.js"></script>
		<script src="js/init.js"></script>

	</body>
	</html>
