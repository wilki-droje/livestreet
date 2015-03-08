<?php

class PluginLikeplug_ModuleLikeplug_MapperLikeplug extends Mapper
{
    public function GetTopicVotersByFilter($sTargetId,&$iCount) {
        $sql = "
			SELECT * FROM " . Config::Get('db.table.vote') . "
			WHERE
					target_type = 'topic'
				AND
					target_id = ?d
                AND
					 vote_direction > 0
		";
        $aResult = array();
        if ($aVotes = $this->oDb->selectPage($iCount, $sql, $sTargetId)) {
            foreach ($aVotes as $aVote) {
                $aResult[] = Engine::GetEntity('ModuleVote_EntityVote', $aVote);
            }
        }
        return $aResult;
    }
}

?>
