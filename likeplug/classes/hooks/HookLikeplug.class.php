<?php

class PluginLikeplug_HookLikeplug extends Hook {

    /*
     * Регистрация событий на хуки
     */
    public function RegisterHook() {
        $this->AddHook('topic_show', 'VotesShow');
    }

    public function VotesShow($aVars) {
        if (isset($aVars['oTopic'])) {
            $this->Viewer_AddBlock('right', 'likeplug', array('plugin' => 'likeplug', 'oTopic' => $aVars['oTopic']
            ), 175
            );
        }
    }
}
?>
