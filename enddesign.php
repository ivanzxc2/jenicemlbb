<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontenddesign.css">
    <title>Jenice MLBB Tournament</title>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo" style="font-size: 40px;">JeNice</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#" >HOME</a></li>
                    <li><a href="#" onclick="showPopup('contactsPopup')">CONTACTS</a></li>
                    <li><a href="frontdesign.php" style="font-size: 25px; margin-left: 500%;" >LogOut</a></li>
                </ul>
            </div>
        </div> 

        <div class="content" style="text-align: center;">
            <h1 class="display-1">JeNice Online<br><span>Mobile Legends: Bang Bang</span><br>Tournament</h1>
            <p class="par">Grab your team, choose your hero, and compete against the best <br>Mobile Legends: Bang Bang players across Brgy.Timbain Calaca City, Batangas. <br>Battle online and then take your team to the finals for a chance at 10,000Pesos with Trophies<br> and medals!</p>

            <button class="cn"><a href="joinus.php" style="font-weight: bold; color: white;">Join Us</a></button> <br>
            <button class="cn" onclick="showPopup('gameRulesPopup')" style="font-weight: bold; color: white;">Game Rules</button>
            <button class="cn"><a href="teams.php" style="font-weight: bold; color: white;">Teams</a></button> <br>
            <button class="cn"><a href="bracket.php" style="font-weight: bold; color: white;">Bracket</a></button>
            <button class="cn" onclick="showPopup('SchedulePopup')" style="font-weight: bold; color: white;">Schedule</a></button>
        </div>
    </div>

    <div id="gameRulesPopup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup('gameRulesPopup')">&times;</span>
            <p style="text-align: justify; ">TOURNAMENT STRUCTURE:<br>
                Tournament is open to all-male, or all-female, or mixed teams Qualifying Stage is Single Round Robin (Point System), top four (4) teams will advance to the Playoffs.
                Semi Finals will be Single Round Robin, top two (2) teams will advance to the Finals.
                Finals will be Best-of-7 games.<br>
                <br>PLAYER REQUIREMENTS:<br>
                A player can only join one team.<br>
                Players must be available during tournament dates.<br>
                Players must be aged 15 and above.<br>
                Players must be currently enrolled in the upcoming school year (2019-2020) or recently graduated batch 2018-2019.<br>
                <br>TEAM REQUIREMENTS: <br>
                A team must consist of the following members:
                5 main players (required) <br>
                1-2 reserved players (optional) <br>
                1 coach/player-coach (optional) <br>
                Once nominated/registered regular/reserved players cannot be replaced throughout the event. <br>
                
                <br>SCHEDULES / TIMING OF MATCHES: <br>
                The tournament is an Online Tournament. <br>
                Players will be advised of schedule and timing of matches thru their registered email address. <br>
                Only Tournament Director can alter schedule and timing of matches <br>
               
                <br>GENERAL CONDUCT: <br>
                Players are expected to conduct themselves and compete with the spirit of sportsmanship, maintaining a friendly and polite demeanor in activities involving other participants and public in general.
                The organizer has the right to apply penalties, disqualify and dismiss any registered player from the tournament, at their discretion, at any stage of the tournament.
                Cheating doesn’t need to be successful to qualify as a violation. Conspiring to cheat is already a violation and will lead to an automatic disqualification for all conspirators.
                Examples of cheating includes, but are not limited to: <br>
                Ghosting <br>
                Account Sharing <br>
                Piloting <br>
                <br>OTHER DETAILED RULES & TECHNICAL ASPECTS: <br>
                
                All participants will be advised of other rules or technical aspects of tournament prior to start of competitions!</p>
        </div>
    </div>

    <div id="SchedulePopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('SchedulePopup')">&times;</span>
            <p  class="fw-bold">DAY 1 KNOCKOUT STAGE<br>
<br>TN Jerwin  vs TN Burrtec 3:00pm-4:30pm <br>

Burrtec liit vs IN YOBAB N FRIENDS 5:00pm- 6-30pm <br>

Andrea  vs Pinoy Pawnstar  7:30pm- 9:00pm <br>

Broom Broom  vs Erwin Esports   9:30pm- 11:00 <br> <br>


DAY 2 SEMI FINALS <br> <br>
MATCH 1 WINNER VS MATCH 2 WINNER   6:00pm-8:30pm <br>
MATCH 3 WINNER VS MATCH 4 WINNER    9:00pm-11:30pm <br> <br>


DAY 3 FINALS <br> <br>
MATCH 7 WINNER VS MATCH 8 WINNER 6:00pm-10:00pm</p>
        </div>
    </div>

    <div id="contactsPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('contactsPopup')">&times;</span>
            <p>Jerwin V. Perez <br>09919395150 <br>Jerwinperez023@gmail.com@gmail.com <br>Elijah P. Laberinto <br>09453057954 <br>elijahlaberinto1509@gmail.com <br>Nicholo I. Manalo <br>09695694234 <br>manalonicholo16@gmail.com <br>Ivan Dick P. Araja <br>09265575085 <br>Arajaivan775@gmail.com <br>Clifford C. Maliwat <br>09067032810 <br>maliwatclifford1@gmail.com <br>Erwin P. Tenorio <br>09363510185 <br>erwintenorio98@gmail.com </p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 JeNice. All rights reserved.</p>
    </footer>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        function showPopup(popupId) {
            document.getElementById(popupId).style.display = 'block';
        }

        function closePopup(popupId) {
            document.getElementById(popupId).style.display = 'none';
        }
    </script>
</body>
</html>
