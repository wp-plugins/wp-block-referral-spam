<?php
$spams = array ( 
                "4webmasters.org",
                "4webmasters.com",                    
                "hardcore.anzwers.net",
                "femmesdenudees.com",
                "illagedusexe.com",
                "gratuitbaise.com",
                "inbabes.sexushost.com",
                "mature.free-websites.com",    
                "ranksonic.com",
                "7makemoneyonline.com",
                "acads.net",
                "anal-acrobats.hol.es",
                "anticrawler.org",
                "best-seo-offer.com",
                "best-seo-solution.com",
                "bestwebsitesawards.com",
                "blackhatworth.com",
                "brakehawk.com",
                "buttons-for-website.com",
                "buttons-for-your-website.com",
                "buy-cheap-online.info",
                "darodar.com",
                "econom.co",
                "event-tracking.com",
                "forum20.smailik.org",
                "forum69.info",
                "free-share-buttons.com",
                "get-free-traffic-now.com",
                "googlsucks.com",
                "guardlink.org",
                "hulfingtonpost.com",
                "humanorightswatch.org",
                "ilovevitaly.com",
                "iminent.com",
                "kabbalah-red-bracelets.com",
                "kambasoft.com",
                "makemoneyonline.com",
                "masterseek.com",
                "o-o-6-o-o.com",
                "ok.ru",
                "pornhub-forum.ga",
                "pornhub-forum.uni.me",
                "priceg.com",
                "ranksonic.info",
                "ranksonic.org",
                "rapidgator-porn.ga",
                "savetubevideo.com",
                "semalt.com",
                "sexyteens.hol.es",
                "simple-share-buttons.com",
                "social-buttons.com",
                "theguardlan.com",
                "webmaster-traffic.com",
                "youporn-forum.ga",
                "fbdownloader.com",
                "descargar-musicas-gratis.com",
                "baixar-musicas-gratis.comsavetubevideo.com",
                "srecorder.com",
                "ilovevitaly.co",
                "ilovevitaly.ru",
                "backgroundpictures.net",
                "embedle.com",
                "extener.com",
                "extener.org",
                "fbfreegifts.com",
                "feedouble.com",
                "feedouble.net",
                "japfm.com",
                "joinandplay.me",
                "joingames.org",
                "iskalko.ru",
                "musicprojectfoundation.com",
                "myprintscreen.com",
                "slftsdybbg.ru",
                "edakgfvwql.ru",
                "openfrost.com",
                "openfrost.net",
                "openmediasoft.com",
                "serw.clicksor.com",
                "socialseet.ru",
                "sharebutton.net",
                "cityadspix.com",
                "screentoolkit.com",
                "softomix.com",
                "softomix.net",
                "softomix.ru",
                "gobongo.info",
                "myftpupload.com",
                "websocial.me",
                "luxup.ru",
                "ykecwqlixx.ru",
                "soundfrost.org",
                "seoexperimenty.ru",
                "cenokos.ru",
                "star61.de",
                "superiends.org",
                "vapmedia.org",
                "vodkoved.ru",
                "adcash.com",
                "videofrost.com",
                "youtubedownload.org",
                "zazagames.org",
                "viandpet.com",
                "a-hau.mk",
                "cfsrating.sonicwall.com",
                "yougetsignal.com",
                "cenoval.ru",
                "bestwebsiteawards.com",
                "adviceforum.info",
                "o-o-8-o-o.com",
                "smailik.org",
                "s.click.aliexpress.com",
                "Get-Free-Traffic-Now.com",
                "free-share-buttons.co",
                "meendo-free-traffic.ga",
                "www.kabbalah-red-bracelets.com",
                "pornhubforum.tk",
                "amanda-porn.ga",
                "generalporn.org",
                "depositfiles-porn.ga",
                "torture.ml",
                "domination.ml",
                "youporn-forum.uni.me",
                "www.event-tracking.com",
                "trafficmonetize.org",
                "cxpromote.com",
                "непереводимая.рф",
                "sanjosestartups.com",
                "free-social-buttons.com",
                "*.free-share-buttons.com",
                "websites-reviews.com",
                "www1.free-social-buttons.com",
                "www2.free-social-buttons.com",
                "www3.free-social-buttons.com",
                "www4.free-social-buttons.com",
                "www5.free-social-buttons.com",
                "www6.free-social-buttons.com",
                "www7.free-social-buttons.com",
); 
// array of evil spammers 

if(isset($_SERVER['HTTP_REFERER'])) {
  $ref = $_SERVER["HTTP_REFERER"];   
   }
else
{
    $ref = NULL; 
   //it was not sent, perform your default actions here
}


foreach ($spams as $site) { 
    $pattern = "/$site/i"; 
    if (preg_match ($pattern, $ref)) { 
        header("Location: $ref"); exit(); 
    } 
} 
echo '<!-- Block Referral Spam By WPDeveloper.net -->';
?>