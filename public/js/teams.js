$(document).ready(function() {

    var isIndexOpen = false;
    var openIndex;

    $(".game-box").click(function () {
        var indexGameClicked = $(this).index();
        console.log(isIndexOpen);
        console.log(indexGameClicked);
        console.log(openIndex);

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
        $(clickedGame).removeClass('hide-players');
    }

    function hidePlayers(index) {
        var clickedGame = $('.game-box').eq(index).children(".game-players");
        $(clickedGame).addClass('hide-players');
    }

});
