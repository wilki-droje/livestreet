<?php

class PluginLikeplug_ModuleLikeplug extends Module {

    public function Init() {

        $this->oMapper = Engine::GetMapper(__CLASS__);
    }

    public function GetTopicVoters($oTopic) {
        if ($oTopic == null) {
            return array();
        }
        $aVotes = array();
        foreach(array('positive') as $sDirection) {
            $iCount = 0;
            $aVotes[$sDirection] = $this->oMapper->GetTopicVotersByFilter($oTopic->getId(), $iCount);
            $aVotes[$sDirection . '_count'] = $iCount;
            array_map(function($oVote) {
                $oVote->setUser($this->User_GetUserById($oVote->getVoterId()));
            }, $aVotes[$sDirection]);
        }

        return $aVotes;
    }

}
?>