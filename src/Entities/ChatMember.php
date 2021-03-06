<?php

/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Entities;

/**
 * Class ChatMember
 *
 * @link https://core.telegram.org/bots/api#chatmember
 *
 * @method User   getUser()                  Information about the user
 * @method string getStatus()                The member's status in the chat. Can be “creator”, “administrator”, “member”, “restricted”, “left” or “kicked”
 * @method string getCustomTitle()           Optional. Owner and administrators only. Custom title for this user
 * @method bool   getIsAnonymous()           Optional. Owner and administrators only. True, if the user's presence in the chat is hidden
 * @method bool   getCanBeEdited()           Optional. Administrators only. True, if the bot is allowed to edit administrator privileges of that user
 * @method bool   getCanManageChat()         Optional. Administrators only. True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
 * @method bool   getCanPostMessages()       Optional. Administrators only. True, if the administrator can post in the channel, channels only
 * @method bool   getCanEditMessages()       Optional. Administrators only. True, if the administrator can edit messages of other users, channels only
 * @method bool   getCanDeleteMessages()     Optional. Administrators only. True, if the administrator can delete messages of other users
 * @method bool   getCanManageVoiceChats()   Optional. Administrators only. True, if the administrator can manage voice chats
 * @method bool   getCanRestrictMembers()    Optional. Administrators only. True, if the administrator can restrict, ban or unban chat members
 * @method bool   getCanPromoteMembers()     Optional. Administrators only. True, if the administrator can add new administrators with a subset of his own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
 * @method bool   getCanChangeInfo()         Optional. Administrators and restricted only. True, if the user is allowed to change the chat title, photo and other settings
 * @method bool   getCanInviteUsers()        Optional. Administrators and restricted only. True, if the user is allowed to invite new users to the chat
 * @method bool   getCanPinMessages()        Optional. Administrators and restricted only. True, if the user is allowed to pin messages; groups and supergroups only
 * @method bool   getIsMember()              Optional. Restricted only. True, if the user is a member of the chat at the moment of the request
 * @method bool   getCanSendMessages()       Optional. Restricted only. True, if the user can send text messages, contacts, locations and venues
 * @method bool   getCanSendMediaMessages()  Optional. Restricted only. True, if the user can send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
 * @method bool   getCanSendPolls()          Optional. Restricted only. True, if the user is allowed to send polls
 * @method bool   getCanSendOtherMessages()  Optional. Restricted only. True, if the user can send animations, games, stickers and use inline bots, implies can_send_media_messages
 * @method bool   getCanAddWebPagePreviews() Optional. Restricted only. True, if user may add web page previews to his messages, implies can_send_media_messages
 * @method int    getUntilDate()             Optional. Restricted and kicked only. Date when restrictions will be lifted for this user, unix time
 */
class ChatMember extends Entity
{
    /**
     * {@inheritdoc}
     */
    protected function subEntities(): array
    {
        return [
            'user' => User::class,
        ];
    }
}
