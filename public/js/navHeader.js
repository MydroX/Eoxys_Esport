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

            case 'home':
                borderedLinkNumber = 0;
                break;

            case 'news':
                borderedLinkNumber = 1;
                break;

            case 'teams':
                borderedLinkNumber = 2;
                break;

            case 'recruitment':
                borderedLinkNumber = 3;
                break;

            case 'partners':
                borderedLinkNumber = 4;
                break;

            case 'contact':
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
