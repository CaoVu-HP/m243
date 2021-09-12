<?php

namespace Vendor\Module\Block\Account;

class AuthorizationLink extends \Magento\Customer\Block\Account\AuthorizationLink
{
    public function getLabel()
    {
        return $this->isLoggedIn() ? __('Logout') : __('Login'); // Custom Labels
        // return $this->isLoggedIn() ? __('Sign Out') : __('Sign In'); // Default Magento labels
    }
}
