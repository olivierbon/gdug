<?php
namespace Craft;

class GdugVariable
{
    public function getId()
    {
        $query = craft()->db->createCommand()
            ->select('settings')
            ->from('systemsettings')
            ->where('category=:category', array(':category'=>'users'))->queryRow();
            $decode = json_decode($query['settings'], true);
            $groupId = $decode['defaultGroup'];

        return $groupId;
    }

    public function getHandle()
    {
        $groupId = $this->getId();
        
        $handle = craft()->db->createCommand()
            ->select('handle')
            ->from('usergroups')
            ->where('id=:groupId', array(':groupId'=> $groupId))->queryRow();

        return $handle['handle'];
    }
}
