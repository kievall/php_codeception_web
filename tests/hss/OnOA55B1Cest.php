<?php
use Page\MainPage;


class OnOA55B1Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
//        $I->amOnPage(MainPage::$URL);
//        $I->wait(2);
//        $I->click(MainPage::SEELIST);
//        $I->wait(2);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify clicking the Visit Site 1 but');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,0);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->wait(5);
        $I->switchToWindow();
        $name_exp = $I->get_title();
        $I->see($name);
//        echo $name, $name_exp;
    }
}
