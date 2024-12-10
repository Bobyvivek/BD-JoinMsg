<?php

namespace BDJoinMsg\BobyDev;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Server;

class Join extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getLogger()->info(TextFormat::GREEN . "BDJoinMsg by BobyDev Enabled ✅");

        // Register event listener
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $name = $player->getName();

        // Welcome message
        $message = TextFormat::GOLD . "=======================================\n\n" .
                   TextFormat::YELLOW . "Hello $name\n\n" .
                   TextFormat::LIGHT_PURPLE . "Welcome To ServerName\n" .
                   TextFormat::AQUA . "This Is A Minigame Where You Need To Grind\n" .
                   TextFormat::AQUA . "And Become The Most Powerful And Richest\n" .
                   TextFormat::AQUA . "Person In This Game.\n\n" .
                   TextFormat::BLUE . "DISCORD =⟩ " . TextFormat::GREEN . "Discord Link\n " .
                   TextFormat::BLUE . "VOTE =⟩ " . TextFormat::GREEN . "https://SOON\n" .
                   TextFormat::BLUE . "OWNER =⟩ " . TextFormat::GREEN . "BobyDev\n" .
                   TextFormat::BLUE . "YT CHANNEL =⟩ " . TextFormat::GREEN . "Vygofficail\n\n" .
                   TextFormat::GOLD . "=======================================";

        // Send message to player
        $player->sendMessage($message);

        // Dispatch "join" command
        $this->getServer()->dispatchCommand($player, "join");
    }
}