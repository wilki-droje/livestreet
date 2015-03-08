<?php

class PluginLikeplug_BlockLikeplug extends Block {
    public function Exec() {
        $oTopic = $this->GetParam('oTopic');
        $this->Viewer_Assign('aVotes', $this->PluginLikeplug_Likeplug_GetTopicVoters($oTopic));
        $this->Viewer_Assign('iMaxCount',Config::Get('plugin.likeplug.userLikeAmount'));
    }
}
?>
