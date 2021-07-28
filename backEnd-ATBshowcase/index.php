<?php
include('system/config.php'); # config file backend Headers
include('service/datatext.php');

$dataTags = new DataText();

$dataTags->addText("paradigm_h1","SCOOP & SPOON Transforming Tourism with a Paradigm Shift");
$dataTags->addText("paradigm_paragraph","In less than a year, the way the world does business has been transformed. Some organisations have struggled, but others, such as the Austrian National Tourist Office, have sought new business models and practices in order to flourish despite these challenges. ");
$dataTags->addText("slide_title","SCOOP & SPOON<br> New Challenges,<br> New Opportunities,<br> New Success ");
$dataTags->addText("spliter_left_text","By partnering with our talented team at SCOOP & SPOON, the Austrian National Tourist Office discovered that their old marketing methods were no longer viable in the face of the global pandemic. So, with our help, they transformed the crisis into an opportunity to break down old barriers, overcome new obstacles, and shine like never before. ");
$dataTags->addText("spliter_right_text","Each year, in an industry expo event, the natural and cultural assets of Austria are shared with the global tourism industry. We developed an innovative platform to take the event online, while maintaining the effectiveness and impact of the physical event. ");
$dataTags->addText("text_end_page","Using our proven 36W virtual environment, we created atb.virtual.2020 — an immersive, emotional online experience, that set a new standard for digital event planning. ");



echo json_encode($dataTags->getAll());

?>
