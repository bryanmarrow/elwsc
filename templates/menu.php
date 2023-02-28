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
                    <li><a class="dropdown-item font-size-base" target="_blank" href="https://bit.ly/reglamento-elwsc2023"><?= index_reglamento ?></a></li>
                
                <?php

                    }  if($_SESSION['lang']=='en'){
                                
                ?>
                
                    <li><a class="dropdown-item font-size-base" target="_blank" href="https://bit.ly/reglamento-elwsc2023">Rules</a></li>
                <?php } ?>
            <?php }else{ ?>  
                <li><a class="dropdown-item font-size-base" target="_blank" href="https://bit.ly/reglamento-elwsc2023"><?= index_reglamento ?></a></li>
            <?php } ?>  
            <!-- <li><a href="event-details.html">Event Details</a></li> -->
        </ul>
    </li>
    
    <li><a href="line-up"><?= index_lineup ?></a></li>
    <li><a href="conciertos"><?= index_conciertos ?></a></li>
    <li><a href="hotel" >Hotel</a></li>
    <li><a href="tickets" >Tickets</a></li>
</ul>