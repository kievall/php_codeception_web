<?php

use Page\MainPage;


class OnOA440Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::THANK_YOU_PAGE_A4);
        $I->wantTo('Verify changing phone number in TY, should change phone on page Ads 4');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        try {
            $phoneBefore = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B4);
            $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_FRONT_PHONE_TY);
            $I->amOnUrl($newUrl);
            $phoneAfter = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B4);
            $I->seeNotMatchesValues($phoneBefore, $phoneAfter);
        } catch (Exception $e) {
            $I->cantSeeElement(MainPage::THANK_YOU_PAGE_LOC_B4);
        }
    }
}
