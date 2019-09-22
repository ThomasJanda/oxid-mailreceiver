<?php

namespace rs\mailreceiver\Core;

/**
 * Class cpmail_oxemail
 */
class Email extends Email_parent
{

    /**
     * Email constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $myConfig = $this->getConfig();
        $bFix = $myConfig->getConfigParam("cpmail_replace_profihost_fix");
        if($bFix)
            $this->set('Encoding','base64');
    }

    /**
     * @param null $sAddress
     * @param null $sName
     *
     * @return mixed
     */
    public function setRecipient($sAddress = null, $sName = null)
    {
        $myConfig = $this->getConfig();
        $cpmail_replace_recipient=trim($myConfig->getConfigParam("cpmail_replace_recipient"));
        $cpmail_replace_bcc=trim($myConfig->getConfigParam("cpmail_replace_bcc"));

        if($cpmail_replace_recipient!="")
        {
            $sAddress=$cpmail_replace_recipient;
        }

        if($cpmail_replace_bcc!="")
        {
            $this->addBCC($cpmail_replace_bcc);
        }

        return parent::setRecipient($sAddress,$sName);
    }

}