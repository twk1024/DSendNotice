<?php

namespace DIA;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class main extends PluginBase {

    public function onCommand(CommandSender $sender, Command $cmd, String $Label, array $args): bool{
        if($cmd->getName("notification")){
                $player->sendMessage(TextFormat::GREEN . "DOKIDIA");
                $player->addTitle(TextFormat::GREEN . "MY First" . "Plugin");
            }
        return true;
        }
      
     }
