<!DOCTYPE html>
<html lang="de">
<head>
    <title>Habbo: Konfiguration</title>
    <link rel="shortcut icon" href="https://images.habbo.com/habbo-web/america/de/assets/images/favicon.08c747be.ico">
    <link rel="stylesheet" href="www/thirdparty/bootstrap.min.css">
    <link rel="stylesheet" href="www/stylesheet/hh_main.scss">
</head>

<body>
<div class="container">
    Damit <b>Habbo Hotel</b> funktioniert müssen <b>wichtige</b> Einstellungen am Hotel unternommen werden!
    Lass uns einmal gemeinsam drüber schauen und prüfen, ob alles Inordnung ist und ob noch etwas eingestellt werden
    muss.
    Die Konfiguration ist einfach und selbsterklärend damit du dein Hotel ohne Probleme ganz schnell fertigstellen
    kannst. <b>Alle Einstellungen können nach der Installation verändert werden, also keine Sorge!</b>

    <?php

    use app\lib\controller\InstallationController;

    $controller = new InstallationController();
    ?>

    <h3>Kategorie 1: Datenbank Einstellung</h3>
    <p>Zunächst einmal müssen wir dein Hotel mit einer Datenbank verbinden, damit kein Möbelstück, kein Badge, kein
        Taler
        und vieles mehr nicht verloren geht!</p>
    <form method="POST">
        <label for="mysql_host">
            Host-Adresse

        </label>
        <div class="hh_infoBox">
            <b>Host-Adresse:</b> Die Host-Adresse ist die Verbindungsadresse zu deinem Server. Bitte gebe die
            IP-Adresse deines Server ein, worauf dein MySQL-Server läuft.
        </div>

        <label for="mysql_user">
            MySQL Benutzer
            <input type="text" name="mysql_user"/>
        </label>
        <label for="mysql_password">
            MySQL Passwort
            <input type="text" name="mysql_password"/>
        </label>
        <label for="mysql_port">
            MySQL Port
            <input type="text" name="mysql_port" value="3306"/>
        </label>
        <div class="hh_infoBox">
            <b>MySQL Port:</b> Solltest du bei der Installation deines MySQL-Server keine spezifischen Einstellungen
            vorgenommen haben, kannst du dieses Feld unverändert lassen. Sollte die Verbindung trotz korrekter
            Einstellungen fehlschlagen, frage bei deinen Hoster nach ob der MySQL Port ein anderer ist.
        </div>
        <label for="mysql_port">
            Datenbankname
            <input type="text" name="mysql_databasename"/>
        </label>

        <input type="submit" name="install_mysql">
    </form>

    <!--<h3>Kategorie 2: Admin-User erstellen</h3>
    <p>Wir erstellen für dich nun einen Admin-User mit dem du vollen Zugriff auf das Hotel und das Housekeeping
        hast.</p>
    <form method="POST">
        <label for="admin_username">
            Benutzername
            <input type="text" name="admin_username"/>
        </label>

        <label for="admin_passwort">
            Passwort
            <input type="text" name="admin_passwort"/>
        </label>
        <label for="admin_repassword">
            Passwort wiederholen
            <input type="text" name="admin_repassword"/>
        </label>
        <label for="securitycode">
            Sicherheitscode
            <input type="text" name="securitycode"/>
        </label>
        <div class="hh_infoBox">
            <b>Sicherheitscode</b> Damit der Zugriff auf dein Benutzerkonto gesichert ist, musst du einen
            Sicherheitscode als zusätzliches
            Passwort eingeben.
        </div>
    </form>

    <h3>Kategorie 3: Client Einstellungen <sub>(Optional)</sub></h3>
    <p>Hervorragend, deine Datenbank wurde erfolgreich konfiguriert. Damit die Konfiguration reibungslos funktioniert,
        empfehle ich die von uns empfohlene SWF herunterzuladen. Solltest du eine andere SWF benutzen, kann dieser
        Schritt
        nicht ausgeführt werden und du musst deine SWF selber konfigurieren. <br><br>

        Kopier den Ordner <b>"gamedata" in den Hauptordner</b>. Anschließend klicke auf den Reload-Button. Ich prüfe
        dann, ob du die SWF richtig hinterlegt wurde.</p>
    <button>Reload</button>

    <div class="hh_modal">
        <p><b>Herzlichen Glückwunsch!</b> Alle notwendingen Einstellung wurden bereits vorgenommen. Solltest du eine
            andere als die empfohlene SWF benutzen, musst du noch deine SWF und die Client.php anpassen. <br><br>

            Es gibt noch ein paar empfohlene Einstellungen die wir gemeinsam durchgehen können, wie z.B. ob
            Newskommentare
            deaktiviert oder aktiviert werden sollen, die Starttaler und vieles mehr. Wir können diese Einstellungen
            noch gemeinsam durchgehen oder du änderst sie im Housekeeping.</p>
        <button>Einstellungen vornehmen</button>
        <button>Installation beenden</button>
    </div>-->

    <!--<h3>Kategorie 4: Hotel Einstellungen</h3>
    <p>Hier passen wir ein paar Sachen zu deinem Hotel an, wie z.B. die Währung. Du kannst diese Einstellungen jederzeit
        im Housekeeping erneut anpassen.</p>
    <form method="POST">
        <label>
            Wie heißt dein Hotel?
            <input type="text" name="hotelname">
        </label>
        <label>
            Wie viele Taler soll jeder User zur verfügung haben?
            <input type="text" name="starttaler">
        </label>
        <label>
            Wie viele Pixel soll jeder User zur verfügung haben?
            <input type="text" name="startpixel">
        </label>
        <label>
            Wie viele Diamanten soll jeder User zur verfügung haben?
            <input type="text" name="startdiamond">
        </label>
        <label>
            Wie soll das Motto von neu registrierten User lauten?
            <input type="text" name="startmotto">
        </label>

        <fieldset>
            <label>
                Soll die Staffliste sichtbar sein?
                <input type="radio" name="stafflist" value="Aktivieren">
                <input type="radio" name="stafflist" value="Deaktivieren">
            </label>
        </fieldset>

        <fieldset>
            <label>
                Sollen Newskommentare generell aktivieren werden?
                <input type="radio" name="newscomments" value="Aktivieren">
                <input type="radio" name="newscomments" value="Deaktivieren">
            </label>
        </fieldset>

        <fieldset>
            <label>
                Sollen die User bei der Registrierung eine E-Mail angeben?
                <input type="radio" name="registrymail" value="Aktivieren">
                <input type="radio" name="registrymail" value="Deaktivieren">
            </label>
        </fieldset>

        <fieldset>
            <label>
                Sollen sich die User mit Twitter einloggen könn?
                <input type="radio" name="twitterlogin" value="Aktivieren">
                <input type="radio" name="twitterlogin" value="Deaktivieren">
            </label>
        </fieldset>

        <fieldset>
            <label>
                Sollen sich die User mit Discord einloggen könn?
                <input type="radio" name="discordlogin" value="Aktivieren">
                <input type="radio" name="discordlogin" value="Deaktivieren">
            </label>
        </fieldset>

        <fieldset>
            <label>
                Sollen sich die User mit Google einloggen könn?
                <input type="radio" name="googlelogin" value="Aktivieren">
                <input type="radio" name="googlelogin" value="Deaktivieren">
            </label>
        </fieldset>
    </form>-->
</div>
</body>
</html>