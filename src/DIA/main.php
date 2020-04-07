<?php

namespace DIA;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $cmd, String $Label, array $args): bool{
        if($cmd->getName()){
            switch($args(count) === 0){
              case "notification":
                $player->sendMessage(C::GREEN . "Emergency - Your server has infected by DOKIDIA");
                $player->addTitle(C::GREEN . "MY First" . "Plugin");
                break;
            }
        return true;
        }
      
     }
        
    }
