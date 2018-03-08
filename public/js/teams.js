$(document).ready(function() {

    var isGameUse = false;
    var openIndex;

    $('.game-box').click(function() {
        var indexGameClicked = $(this).index();

        if(isGameUse == false) {
            displayPlayers(indexGameClicked);
        }

        else if(isGameUse == true) {
            if(indexGameClicked != openIndex) {
                hidePlayers(openIndex);
                displayPlayers(indexGameClicked);
            }
            else if(indexGameClicked == openIndex) {
                hidePlayers(indexGameClicked);
            }

            else {
                console.log("Error index")
            }
        }

    });

    function displayPlayers(index) {
        var clickedGame = $('.game-box').eq(index);
        openIndex = index;

        //First if for the game with one team and the elseif for the game with two teams
        if (index == 0 || index == 1 || index == 2 || index == 3)  {
            $(clickedGame).children('.team-box').removeClass('hide-box');
            $(clickedGame).children('.team-box').addClass('display-box');
            $(clickedGame).removeClass('hidePlayers');
            $(clickedGame).addClass('displayOneTeam');
        }
/*
        else if (index == 0 || index == 1) {
            $(clickedGame).children('.team-box').removeClass('hide-box');
            $(clickedGame).children('.team-box').addClass('display-box');
            $(clickedGame).removeClass('hidePlayers');
            $(clickedGame).addClass('displayTwoTeams');
        }
*/
        else {
            console.log('Error index')
        }

        isGameUse = true;
    }

    function hidePlayers(index) {
        var clickedGame = $('.game-box').eq(index);

        //First if for the game with one team and the elseif for the game with two teams
        if (index == 0 || index == 1 || index == 2 || index == 3)  {
            $(clickedGame).children('.team-box').removeClass('display-box');
            $(clickedGame).children('.team-box').addClass('hide-box');
            $(clickedGame).removeClass('displayOneTeam');
            $(clickedGame).addClass('hidePlayers');
        }
/*
        else if (index == 0 || index == 1) {
            $(clickedGame).children('.team-box').removeClass('display-box');
            $(clickedGame).children('.team-box').addClass('hide-box');
            $(clickedGame).removeClass('displayTwoTeams');
            $(clickedGame).addClass('hidePlayers');
        }
*/
        else {
            console.log('Error index')
        }

        isGameUse = false;
    }

});
