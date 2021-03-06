<?
    /* ------------------------------------------------------ */
    /* ----------------- Configuration Area ----------------- */
    /* ------------------------------------------------------ */
    
    $doOCR = true;
    $doRenameAfterOCR = true;
    $doTagging = true;
    
    // files which match this rule are considered to be OCR'd
    $matchWithoutOCR = "Scan*"; // without file extension .pdf
    
    // files which match this regex are considered for automatic rename
    $OCRPrefix = "OCR_"; // without file extension .pdf
    
    // ocrmypdf options
    // -s 	don't OCR pages with text again
	// -r	automatically rotate pages based on detected text orientation
	// -l	language (deu,enu,...)
    //  example: docker run --rm -u 1026 -v "/volume1/docker/ocr:/home/docker" jbarlow83/ocrmypdf -l deu Scan.pdf Out.pdf
    $ocropt = "-sr -l deu";
    $dockercontainer = "jbarlow83/ocrmypdf";
    
    // here are freshly scanned documents. to be OCR'd and renamed.
    $inboxfolder = "/volume1/homes/stefan/Dokumente/Scans/_inbox";
    
    // Set $archivefolder to the folder which contains your documents for tagging.
    // Without trailing (back)slash!
    $archivefolder = "/volume1/homes/stefan/Dokumente/Scans";
    
    // recycle-bin
    $recyclebin = "/volume1/homes/stefan/Dokumente/Scans/#recycle";
    
    // In $tagsfolder your tags will be created. Please use a fresh folder.
    // Everything here is subject to be deleted! Without trailing (back)slash!
    $tagsfolder = "/volume1/homes/stefan/Dokumente/Scans/tags";
    
    // Filenames are prepended  with a date in format "Year-Month-Day". You can adjust or
    // clear the seperator here to suit your needs.
    $dateseperator = "-";

    // $logfile is the path to a logfile OR "syslog" OR "stdout"
    //$logfile = dirname(__FILE__) . "/FileBasedMiniDMS.log";
    $logfile = "/volume1/homes/stefan/Dokumente/Scans/_inbox/FileBasedMiniDMS.log";
    
    // $loglevel can be 0 (none), 3 (error), 6 (info), 7 (all)
    $loglevel = 6;
    
    // $timezone. just for logging purposes.
    $timezone = 'Europe/Berlin';
    
    // first match is used
    $renamerules = array(
        // "rule" => "name"
    	"Meldebescheinigung&Sozialversicherung" => "Meldebescheinigung Sozialversicherung",
        "Grundsteuerbescheid" => "Grundsteuerbescheid",
        "Finanzamt" => "Finanzamt",
        "LBS&Bauspar" => "LBS Bausparen",
        "Deka&Jahresdepotauszug" => "Deka Jahresdepotauszug",
        "Deka" => "Deka",
        "Sparkasse&Dividende&Depot" => "Sparkasse Aktiendepot Dividende",
        "Apotheke" => "Apotheke",
        "Erdgas&Jahresrechnung" => "Erdgas Jahresrechnung",
        "Zahnarzt" => "Zahnarzt",
        "PVS BW" => "Arztrechnung PVS",
        "Arzt,Ärztin" => "Arzt",
        "Heilpraktiker" => "Heilpraktiker",
        "Vodafone GmbH" => "Vodafone",
    	);
    
    // all are applied and concaternated
    $tagrules = array(
        // "tag"                => "rule"
    	"#stefan"		        => "Stefan&Weiss",
    	"#rechnung"		        => "Rechnung",
        "#beitragsanpassung"    => "Beitragsanpassung",
    	);
?>
