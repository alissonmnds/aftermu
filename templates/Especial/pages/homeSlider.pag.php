	<!-- Box's Top Section -->
	<div id="top-section">
    	<div class="box">
    	<div class="min-header"><span>Rei do PVP</span></div>
        	<div class="force-box">
            <span id="crown"><!-- don't remove --></span>
        	<img src="<?php echo $GLOBALS['CTM_General']->Image(L_CharKingOfPVP); ?>" width="70" height="80" alt="<?php echo L_CharKingOfPVP; ?>">
            	<div class="tblock right">
                    <p>Personagem:</p>
                    <p><a href="javascript:void(EffectWeb);" onClick="CTM_Load('?pag=search&char=<?=urlencode(L_CharKingOfPVP);?>','conteudo','GET');">
                    <?php echo L_CharKingOfPVP; ?></a></p>
                    <p>&nbsp;</p>

                </div>
            </div>
            <div class="fire-left"><!-- don't remove --></div>
            <div class="fire-right"><!-- don't remove --></div>
        </div>
    	<div class="box">
    	<div class="min-header"><span>UFC MuOnLine</span></div>
        	<div class="force-box">
                <img src="<?php echo $GLOBALS['CTM_General']->Image(L_CharUFC); ?>" width="70" height="80" alt="<?php echo L_CharUFC; ?>">
            	<div class="tblock right" id="ufc">
                    <p><a href="javascript:void(EffectWeb);" onClick="CTM_Load('?pag=search&char=<?=urlencode(L_CharUFC);?>','conteudo','GET');">
                    <?php echo L_CharUFC; ?></a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="fire-left"><!-- don't remove --></div>
            <div class="fire-right"><!-- don't remove --></div>
        </div>
    	<div class="box">
    	<div class="min-header"><span>Melhor Guild</span></div>
        	<div class="force-box">
				<?php
                global $CTM_MSSQL;
                $query = $CTM_MSSQL->query("SELECT TOP 1 G_Name,G_Mark,G_Score FROM ".MuGen_DB.".dbo.Guild ORDER BY G_Score DESC");
                while($topguilds = mssql_fetch_array($query)){
                    echo "<img src=\"?public=logoGuild&amp;code=".urlencode(bin2hex($topguilds[1]))."\" width=\"70\" height=\"80\" alt=\"\">
                    <div class=\"tblock right\">
                        <p>Guild:</p>
                        <p><a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($topguilds[0])."','conteudo','GET');\">
                        ".$topguilds[0]."</a></p>
                        <p>&nbsp;</p>
                        <p><a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=ranking&rank=guild','conteudo','GET');\">[ VER MAIS ]</a></p>
					</div>";
                    }
                ?>
            </div>
            <div class="fire-left"><!-- don't remove --></div>
            <div class="fire-right"><!-- don't remove --></div>
        </div>
    </div>
	<!-- END --/ Box's Top Section /-- -->
<div id="content">
    <script type="text/javascript" src="templates/{Template_Dir}/media/scripts/script.js"></script>
    <?php if(constant("Show_News") == true){ ?>
    <div class="box">
    <div class="s-header"><span>&Uacute;ltimas Not&iacute;cias</span></div>
        <blockquote>{Show_News}</blockquote>
    </div>
    
    <div id="slide">
        <div id="coin-slider">
			<a href="<?=L_LinkSlide?>" target="_blank"><img src="<?=L_ImgSlide?>" width="745" height="136" alt=""></a>
			<a href="<?=L_LinkSlide2?>" target="_blank"><img src="<?=L_ImgSlide2?>" width="745" height="136" alt=""></a>
			<a href="<?=L_LinkSlide3?>" target="_blank"><img src="<?=L_ImgSlide3?>" width="745" height="136" alt=""></a>
			<a href="<?=L_LinkSlide4?>" target="_blank"><img src="<?=L_ImgSlide4?>" width="745" height="136" alt=""></a>
			<a href="<?=L_LinkSlide5?>" target="_blank"><img src="<?=L_ImgSlide5?>" width="745" height="136" alt=""></a>
        </div>
    </div>
	
	<?php }if(constant("Board_News") == true){ ?>
    <div class="box">
    <div class="s-header"><span>Not&iacute;cias do F&oacute;rum</span></div>
        <blockquote>{Board_News}</blockquote>
    </div>
	<?php }if(constant("Show_Warning") == true){ ?>
        {%SHOW_WARNING%}
    <?php } ?>
    <div class="box">
    <div class="s-header"><span>Top's do Servidor</span></div>
    	<div id="outer-div">
            <div id="top-resets">
			<?php
			global $CTM_MSSQL;
			$query = $CTM_MSSQL->query("SELECT TOP 5 Name,".Column_Reset.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_Reset." DESC");
			$cont = NULL;
			while($topresets = mssql_fetch_array($query)){
			$cont++;
				if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
					$photo = Upload_Img."nophoto.gif";
				}else{
					$photo = Upload_Img."".$topresets[2]."";
				}
				echo '<ul class="tops">
				<li class="box-top">
					<a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
					<span>'.$topresets[0].'</span>
					<img src="'.$photo.'" width="94" height="97" alt="'.$topresets[0].'">
					<span>( '.$topresets[1].' Resets )</span>
					</a>
				</li>
				</ul>';
				}
			?>
            </div>
            
            <div id="top-mresets">
			<?php
			global $CTM_MSSQL;
			$query = $CTM_MSSQL->query("SELECT TOP 5 Name,".Column_MReset.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_MReset." DESC");
			$cont = NULL;
			while($topresets = mssql_fetch_array($query)){
			$cont++;
				if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
					$photo = Upload_Img."nophoto.gif";
				}else{
					$photo = Upload_Img."".$topresets[2]."";
				}
				echo '<ul class="tops">
				<li class="box-top">
					<a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
					<span>'.$topresets[0].'</span>
					<img src="'.$photo.'" width="94" height="97" alt="'.$topresets[0].'">
					<span>( '.$topresets[1].' M.Resets )</span>
					</a>
				</li>
				</ul>';
				}
			?>
            </div>
            
            <div id="top-daily">
			<?php
			global $CTM_MSSQL;
			$query = $CTM_MSSQL->query("SELECT TOP 5 Name,".Column_ResetDay.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_ResetDay." DESC");
			$cont = NULL;
			while($topresets = mssql_fetch_array($query)){
			$cont++;
				if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
					$photo = Upload_Img."nophoto.gif";
				}else{
					$photo = Upload_Img."".$topresets[2]."";
				}
				echo '<ul class="tops">
				<li class="box-top">
					<a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
					<span>'.$topresets[0].'</span>
					<img src="'.$photo.'" width="94" height="97" alt="'.$topresets[0].'">
					<span>( '.$topresets[1].' Resets )</span>
					</a>
				</li>
				</ul>';
				}
			?>
            </div>
            
            <div id="top-weekly">
			<?php
			global $CTM_MSSQL;
			$query = $CTM_MSSQL->query("SELECT TOP 5 Name,".Column_ResetWeek.",CTM_Image FROM ".MuGen_DB.".dbo.Character ORDER BY ".Column_ResetWeek." DESC");
			$cont = NULL;
			while($topresets = mssql_fetch_array($query)){
			$cont++;
				if($topresets[2] == NULL OR empty($topresets[2]) OR !file_exists(Upload_Img."".$topresets[2]."")){
					$photo = Upload_Img."nophoto.gif";
				}else{
					$photo = Upload_Img."".$topresets[2]."";
				}
				echo '<ul class="tops">
				<li class="box-top">
					<a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=search&amp;char='.$topresets[0].'\', \'conteudo\',\'GET\');">
					<span>'.$topresets[0].'</span>
					<img src="'.$photo.'" width="94" height="97" alt="'.$topresets[0].'">
					<span>( '.$topresets[1].' Resets )</span>
					</a>
				</li>
				</ul>';
				}
			?>
            </div>
            
            <div id="top-guilds">
			<?php
                global $CTM_MSSQL;
                $query = $CTM_MSSQL->query("SELECT TOP 5 G_Name,G_Mark,G_Score FROM ".MuGen_DB.".dbo.Guild ORDER BY G_Score DESC");
                if(empty($query)){
                    echo "<div class=\"info-box\">N&atilde;o h&aacute; ScreenShots adicionadas no momento.</div>";
                }else{
                    while($topguilds = mssql_fetch_array($query)){
                        echo "<ul class=\"tops\">
                        <li class=\"box-top\">
                            <a href=\"javascript: void(EffectWeb);\" onclick=\"CTM_Load('?pag=search&guild=".urlencode($topguilds[0])."','conteudo','GET');\">
                            <span>".$cont."º - ".$topguilds[0]."</span>
                            <img src=\"?public=logoGuild&amp;code=".urlencode(bin2hex($topguilds[1]))."\" width=\"94\" height=\"97\" alt=\"\">
                            <span>( ".$topguilds[2]." Score )</span>
                            </a>
                        </li>
                        </ul>";
                    }
                }
            ?>
            </div>
        </div>
    <script type="text/javascript">
        var aba = new JTabControl("outer-div",710,300);
        aba.addTab("top-resets", "Resets");
        aba.addTab("top-mresets", "Master Resets");
        aba.addTab("top-daily", "Resets Di&aacute;rio");
        aba.addTab("top-weekly", "Resets Semanal");
        aba.addTab("top-guilds", "Guilds");
    </script>
    </div>
<?php if(constant("Show_ScreenShots") == true){ ?>
    <div class="box">
    <div class="s-header"><span>Screenshots</span></div>
	<?php
        global $CTM_MSSQL;
        $query = $CTM_MSSQL->query("SELECT TOP 5 * FROM ".MSSQL_DB.".dbo.CTM_WebScreenShots ORDER BY Id DESC");
        if(empty($query)){
            echo "<div class=\"info-box\">N&atilde;o h&aacute; ScreenShots adicionadas no momento.</div>";
        }else{
            while($ss = mssql_fetch_array($query)){
                echo '<ul class="tops">
                <li class="box-top">
                    <a href="javascript: void(EffectWeb);" onclick="CTM_Load(\'?pag=screenshots&amp;view='.$ss[0].'\', \'conteudo\', \'GET\');">
                    <span>Autor: '.$ss[2].'</span>
                    <img src="'.Upload_SS.''.$ss[6].'" width="94" height="97" alt="">
                    <span>('.$ss[3].' Votos)</span>
                </a>
                </li>
            </ul>';
            }
        }
    ?>
	<a href="javascript: void(EffectWeb);" onclick="CTM_Load('?pag=screenshots','conteudo','GET');" class="right margin">
    	<span class="btn">Mais Screenshots</span>
    </a>
    </div>
    <div class="box">
    <div class="s-header"><span>Bate-Papo</span></div>
     
	<span>

 	</span>

<div>
<?php } ?>
</div>
