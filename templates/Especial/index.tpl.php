<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>{%TITLE_WEB%}</title>
<style type="text/css">
	@import url("templates/{Template_Dir}/media/styles/muscript.css");
	@import url("modules/header/css/sexyalertbox.css");
	@import url("modules/header/css/sexy-tooltips.css");
	@import url("modules/header/css/jquery.lightbox.css");
	@import url("modules/header/css/SpryTabbedPanels.css");
</style>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/jquery.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/coin-slider.min.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/aba.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/ddsmoothmenu.js"></script>
<script type="text/javascript" src="templates/{Template_Dir}/media/scripts/menu.js"></script>
<script type="text/javascript" src="modules/header/javascripts/ajax.js"></script>
<script type="text/javascript" src="modules/header/javascripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="modules/header/javascripts/sexyalertbox.v1.2.jquery.js"></script>
<script type="text/javascript" src="modules/header/javascripts/sexy-tooltips.v1.1.jquery.js"></script>
<script type="text/javascript" src="modules/header/javascripts/jquery.lightbox.js"></script>
<script type="text/javascript" src="modules/header/javascripts/SpryTabbedPanels.js"></script>
<script type="text/javascript" src="modules/header/javascripts/functions.js"></script>
<script type="text/javascript">
function Credits(){
	Sexy.info("<span class=\"h1\">Effect Web {Web_Version}</span><br /><br />Desenvolvido Por: <b>Erick-Master</b><br /><br /><b>CTM TEAM Softwares</b><br /><a target=\"_blank\" href=\"http://www.ctmts.com.br\">www.ctmts.com.br</a>");
}
function CreditsTpl(){
	Sexy.info("<span class=\"h1\">MuScript Template</span><br />Desenvolvido Por: <b>LucasHP</b><br /><br /><b>CTM TEAM Softwares</b><br /><a target=\"_blank\" href=\"http://www.ctmts.com.br\">www.ctmts.com.br</a> / <a target=\"_blank\" href=\"http://www.lhpdesigner.com.br\">www.lhpdesigner.com.br</a>");
}
function Record_Gen(){
	Sexy.info("No dia <b>{Record_Gen#Date}</b> as <b>{Record_Gen#Time}</b>.<br />Nosso Record teve o total de <b class=\"colr\">{Record_Gen#Players}</b> Player(s) Online");
}
function Record_Day(){
	Sexy.info("Hoje (<b>{Record_Day#Date}</b>) as <b>{Record_Day#Time}</b>.<br />Nosso Record teve o total de <b class=\"colr\">{Record_Day#Players}</b> Player(s) Online");
}
</script>
</head>
<body>
<div id="all">
<header><!-- MuScript 99D+97I - Diversão e qualidade é o nosso lema!!! --></header>
<div id="top-nav"><!-- don't remove --></div>
<div id="bottom-nav"><!-- don't remove --></div>
<nav>
        <div id="smoothmenu" class="ddsmoothmenu">
        	<ul>
                <li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=home','conteudo','GET'); AutoLoad();">Home</a></li>
                <li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=paneluser','conteudo','GET');">Painel</a>
                	<ul>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=paneluser&option=SELECT_CHAR','conteudo','GET');">Gerenciar Personagem</a></li>
                    </ul>
                </li>
                <li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=info','conteudo','GET');">Informa&ccedil;&otilde;es</a>
                    <ul>
              	    	<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=staff','conteudo','GET');">Equipe</a></li>
              	   		<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=terms','conteudo','GET');">Regras / Termos</a></li>
                   	</ul>
				</li>
				<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=terms&register=true','conteudo','GET');">Cadastro</a></li>
				<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=downloads','conteudo','GET');">Downloads</a></li>
				<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking','conteudo','GET');">Rankings</a>
					<ul>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resets','conteudo','GET');">Resets Gerais</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsday','conteudo','GET');">Resets Diarios</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsweek','conteudo','GET');">Resets Semanais</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=resetsmonth','conteudo','GET');">Resets Mensais</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=mresets','conteudo','GET');">Master Reset</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=guild','conteudo','GET');">Guilds</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=pk','conteudo','GET');">Top PK</a></li>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=hero','conteudo','GET');">Top Hero</a></li>
						<?php
						global $_Ranking;
						if($_Ranking["Gens"]["Enable"] == true)
						{
						?>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=ranking&rank=gens','conteudo','GET');">Gens</a></li>
						<? } ?>
					</ul>
				</li>
                <li><a href="#" onclick="CTM_Load('?pag=contact','conteudo','GET');">Contato</a>
					<ul>
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=contact&type=mail','conteudo','GET');">E-Mail / Facebook / Skype</a></li>
						{Menu#Suportt_Phone}
						<li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=contact&type=tickets','conteudo','GET');">Tickets</a></li>
						{Menu#Suportt_Forum}
					</ul>
				</li>
				<li><a href="#">Extras</a>
					<ul>
						<li><a href="#">Redes Sociais</a>
							<ul>
								<li><a target="_black" href="{Menu#Orkut_Link}">Orkut (Comunidade)</a></li>
								{Menu#Twitter_Link}
							</ul>
						</li>
						{Menu#Chat}
						{Menu#Raffles}
						{Menu#Extras}
					</ul>
				</li>
    <li><a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=vip-cash','conteudo','GET');">VIPs / {Coin_1}</a></li>
				<li>
				    {Menu#Shops}
					{Menu#Forum}
        	</ul>
        </div>
</nav>
<aside>
	<div class="box">
    	<div class="min-header"><span>Painel de Controle</span></div>
		<div id="Panel">{Div#Panel}</div>
    </div>
	<div class="box">
    	<div class="min-header"><span>Configura&ccedil;&otilde;es</span></div>
			<ul class="list">
				<li>&raquo; Nome: <span class="purple">{Server_Name}</span></li>
				<li>&raquo; Vers&atilde;o <span class="purple">{@_Info#Version}</span></li>
				<li>&raquo; Experi&ecirc;ncia: <span class="purple">{@_Info#Xp}</span></li>
				<li>&raquo; Drop: <span class="purple">{@_Info#Drop}</span></li>
				<li>&raquo; Bug Bless: <span class="purple">{@_Info#BugBless}</span></li>
				<li>&raquo; Tipo de Reset: <span class="purple">{@_Info#ResetType}</span></li>
			</ul>
    </div>
	<div class="box">
    	<div class="min-header"><span>Informa&ccedil;&otilde;es</span></div>
			<ul class="list">
				<li>&raquo; Total de Contas: <span class="purple">{@_Info#Accounts}</span></li>
				<li>&raquo; Total de Personagens: <span class="purple">{@_Info#Characters}</span></li>
				<li>&raquo; Total de Guilds: <span class="purple">{@_Info#Guilds}</span></li>
				<li>&raquo; Contas {VIP_Name#1}: <span class="purple">{@_Info#VIP-1}</span></li>
				<li>&raquo; Contas {VIP_Name#2}: <span class="purple">{@_Info#VIP-2}</span></li>
				<?php if(VIP_Number >= 3) { ?>
				<li>&raquo; Contas {VIP_Name#3}: <span>{@_Info#VIP-3}</span></li>
				<?php } if(VIP_Number >= 4) { ?>
				<li>&raquo; Contas {VIP_Name#4}: <span>{@_Info#VIP-4}</span></li>
				<?php } if(VIP_Number == 5) { ?>
				<li>&raquo; Contas {VIP_Name#5}: <span>{@_Info#VIP-5}</span></li>
				<?php } ?>
				<li>&raquo; Contas Banidas: <span class="purple">{@_Info#Acc_Ban}</span></li>
				<li>&raquo; Personagens Banidos: <span class="purple">{@_Info#Char_Ban}</span></li>
				<li>&raquo; Record Online: <a href="javascript: void(EffectWeb);" onclick="Record_Gen(); return false;"><b>{Record_Gen#Players}</b></a></li>
				<li>&raquo; Record Hoje: <a href="javascript: void(EffectWeb);" onclick="Record_Day(); return false;"><b>{Record_Day#Players}</b></a></li>
			</ul>
    </div>
	<div class="box">
    	<div class="min-header"><span>Servidores</span></div>
			<div id="ServerRefresh" style="display:none;"></div>
            <div id="Servers">{Server_List}</div> 
    </div>
	<div class="box">
    	<div class="min-header"><span>Enquete</span></div>
			<div id="Web_Poll">{Web_Poll}</div>
    </div>
	<div class="box">
    	<div class="min-header"><span>Equipe {Server_Name}</span></div>
			<div id="StaffList">{Staff_List}</div>
    </div>
</aside>
<section>
	<div id="conteudo">{%WEB_NAVIGATION%}</div>
</section>
<footer>
	<p>Copyright &copy; {Year} {Server_Name} - Todos os Direitos Reservados</p>
<p>Effect Web {Web_Version}</p>
	<p>Powered by: <a href="javascript: void(EffectWeb)" onclick="Credits(); return false;">Erick-Master</a> | Template by: <a href="javascript: void(EffectWeb)" onclick="CreditsTpl(); return false;">LucasHP</a> | Editado e Disponibilizado por <a href="http://www.viciadosmu.com.br/" target="_blank">ViciadosMu</a></p>
    {Template_Selector}<div class="center" style="width:175px;">
</footer>
</div>
</body>
</html>
