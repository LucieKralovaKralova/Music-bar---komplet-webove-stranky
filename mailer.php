// Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $date = trim($_POST["date"]);
    $hour = trim($_POST["vyberhodiny"]);
    $minute = trim($_POST["vyberminuty"]);
    $people = trim($_POST["people"]);
    $message = trim($_POST["message"]);
    
    //    // Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    //    $name = strip_tags(trim($_POST["name"]));
    //    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    //    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    //    $message = trim($_POST["message"]);
    //    $phone = trim($_POST["phone"]);
       
    


    // Kontroluje data popř. přesměruje na chybovou adresu - doplnit existující webovou stránku !!!!!!!!
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.testkralova.fun/chyba.html?success=-1#form");
        exit;
    }
    // if (empty($name) OR empty($message) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: https://www.dopln.cz/index.html?success=-1#form");
    //     exit;
    // }

    // Nastavte si email, na který chcete, aby se vyplněný formulář odeslal - vyplníme jakýkoliv náš email !!!!!!!!!
    $recipient = "nvidia8800@seznam.cz";

    // Nastavte předmět odeslaného emailu
    $subject = "Máte novou rezervaci od: $name";

    // Obsah emailu, který se vám odešle
    $email_content = "Jméno: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Datum: \n$date\n";
    $email_content .= "Hodina: \n$hour\n";
    $email_content .= "Minuta: \n$minute\n";
    $email_content .= "Počet lidí: \n$people\n";
    $email_content .= "Poznámka:\n$message\n";

    // Emailová hlavička
    $email_headers = "From: $name <$email>";

    // Odeslání emailu - dáme vše dohromady
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Přesměrování na stránku, pokud vše proběhlo v pořádku - doplnit webovou adresu pro poděkování !!!!!!!!!!
    header("Location:http://www.testkralova.fun/podekovani.html?success=1#form");

?>
<!-- // Přesměrování na stránku, pokud vše proběhlo v pořádku - doplnit webovou adresu pro poděkování !!!!!!!!!!
    header("Location:http://www.testkralova.fun/podekovani.html?success=1#form"); -->