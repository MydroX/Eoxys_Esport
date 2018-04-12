$(document).ready(function() {

    var isIndexOpen = false;
    var openIndex;

    $(".game-box").click(function () {

        var indexGameClicked = $(this).index();

        if(isIndexOpen == false) {
            displayPlayers(indexGameClicked);
            isIndexOpen = true;
            openIndex = indexGameClicked;
        }

        else if(isIndexOpen == true) {
            if(indexGameClicked != openIndex) {
                hidePlayers(openIndex);
                displayPlayers(indexGameClicked);
                openIndex = indexGameClicked;
            }
            else if(indexGameClicked == openIndex) {
                hidePlayers(indexGameClicked);
                openIndex = indexGameClicked;
                isIndexOpen = false;
            }

            else
                console.log("Error Index");
        }

    });

    function displayPlayers(index) {
        var clickedGame = $('.game-box').eq(index).children(".game-players");
        var arrowUsed = $('.game-box').eq(index).children('.arrow');
        $(arrowUsed).addClass('rotate');
        $(clickedGame).removeClass('hide-players');
    }

    function hidePlayers(index) {
        var clickedGame = $('.game-box').eq(index).children(".game-players");
        var arrowUsed = $('.game-box').eq(index).children('.arrow');
        $(arrowUsed).removeClass('rotate');
        $(clickedGame).addClass('hide-players');
    }

});
