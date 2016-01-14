<?php

namespace Main;

use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener
{
  public function onPreLogin(PlayerPreLoginEvent $e)
  {
    $player = $e->getPlayer();
    foreach($this->getServer()->getOnlinePlayers() as $p)
    {
      if(strtolower($player->getName()) === strtolower($p->getName() and $p !== $player))
      {
        $e->setKickMessage(F::RED.$player->getName() .F::GOLD." already playing on a server");
        $e->setCancelled(true);
        return;
      }
    }
  }
}
