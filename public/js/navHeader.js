$(document).ready(function () {

    navHeaderStyle();

    function navHeaderStyle() {
        var $mainMenuLinks = $('header nav ul').children('li');
        var numberOflinks = $mainMenuLinks.length;
        var borderedLinkNumber;

        var url = window.location.search;
        var urlParts = url.split('=');
        var activePageName = urlParts[1];

        switch (activePageName) {
            case undefined:
                borderedLinkNumber = 0;
                break;

            case 'home.php':
                borderedLinkNumber = 0;
                break;

            case 'news.php':
                borderedLinkNumber = 1;
                break;

            case 'teams.php':
                borderedLinkNumber = 2;
                break;

            case 'recruitment.php':
                borderedLinkNumber = 3;
                break;

            case 'partners.php':
                borderedLinkNumber = 4;
                break;

            case 'contact.php':
                borderedLinkNumber = 5;
                break;

            default:
                console.log('URL Error');
                return;
        }

        var linkOfActualPage = $mainMenuLinks.eq(borderedLinkNumber);
        $(linkOfActualPage).css({'borderTop':'7px solid #018DFF', 'lineHeight':'143px'});
        $(linkOfActualPage).children().css({'color':'#018DFF'});

    }

});
