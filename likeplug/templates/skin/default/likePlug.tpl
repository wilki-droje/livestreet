{assign var="oUser" value=$oTopic->getUser()}
{assign var="oVote" value=$oTopic->getVote()}
    <li>
            <ul>
                <li><i class="icon-synio-vote-info-up"></i> {if $aVotes.positive}:
                    {foreach from=$aVotes.positive item=oVote name=showvotes_list}
                        {assign var='oUser' value=$oVote->getUser()}
                        <a href="{$oUser->getUserWebPath()}">{$oUser->getLogin()}</a>{if !$smarty.foreach.showvotes_list.last}, {/if}
                        {$iMaxCount=$iMaxCount-1}
                        {if $iMaxCount==0}
                            {break}
                            {/if}
                    {/foreach}
                </li>
                {/if}

            </ul>
    </li>
