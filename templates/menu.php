<ul>
    <li>
        <a class="" href="<?= $rootPath ?>"><?=  index_inicio ?></a>
    </li>
    
    <li class="menu-item-has-children"><a href="#"><?=  index_campeonato ?></a>
        <ul class="sub-menu">
            <?php  if(isset($_SESSION['lang'])){ ?>
                <?php
                    if($_SESSION['lang']=='es'){
                                
                ?>
                    <li><a class="dropdown-item font-size-base d-none" target="_blank" href="https://bit.ly/reglamento-elwsc2023"><?= index_reglamento ?></a></li>
                
                <?php

                    }  if($_SESSION['lang']=='en'){
                                
                ?>
                
                    <li><a class="dropdown-item font-size-base d-none" target="_blank" href="https://bit.ly/rules_elwsc2023">Rules</a></li>
                <?php } ?>
            <?php }else{ ?>  
                <li><a class="dropdown-item font-size-base d-none" target="_blank" href="https://bit.ly/reglamento-elwsc2023"><?= index_reglamento ?></a></li>
            <?php } ?>  
            <li><a href="#">Cómite de Competidores</a></li>
        </ul>
    </li>
    
    <li class="d-none"><a  href="line-up"><?= index_lineup ?></a></li>
    <li class="d-none"><a href="conciertos"><?= index_conciertos ?></a></li>
    <li class="d-none"><a href="hotel" >Hotel</a></li>
    <li ><a href="tickets" >Tickets</a></li>
    <li class="d-block d-lg-none mt-2">Language :</li>
    <li class="d-block d-lg-none">
        <form method='get' action='' id='form_lang'>
            <select name='lang' onchange='changeLang();'>
                <option value='es'
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'es'){ echo "selected"; } ?>>Español
                </option>
                <option value='en'
                <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?>>English
                </option>
            </select>
        </form>
    </li>
</ul>