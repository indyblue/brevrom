const swBrevrom = {};
(() => {
  const strCache = `
/b/htm_p.css
/b/htm_p.js
/dist/my-preact.js
/etc/dom-tools.js
/b/jquery-1.7.2.min.js
/b/font/freeserif.woff
/b/font/freeserifItalic.woff
/b/font/freeserifBoldItalic.woff
/b/font/freeserifBold.woff
/b/font/FancyVR.woff
/b/font/oldlondon.woff
/b/Images/separator1.png
/b/Images/crucifix.png
/b/Images/01_sunday_vespers.png
/b/Images/benedicamus_domino.png
/b/Images/Saints/0815_assumption_bvm.png
/b/Images/Saints/0501_st_joseph_patron_of_church.png
/b/Images/Saints/0624_john_the_baptist.png
/b/Images/Saints/00_proper_of_saints.png
/b/Images/Saints/1007_holy_rosary_bvm.png
/b/Images/Saints/1101_all_saints.png
/b/Images/Saints/0629_ss_peter_and_paul.png
/b/Images/Saints/0319_st_joseph.png
/b/Images/Saints/1208_immaculate_conception.png
/b/Images/Saints/0325_annunciation.png
/b/Images/Saints/0908_nativity_of_bvm.png
/b/Images/Saints/0806_transfiguration.png
/b/Images/Saints/0929_dedication_st_michael.png
/b/Images/Title_JR.png
/b/Images/Tempore/t10_sacred_heart.png
/b/Images/Tempore/t05_ascension.png
/b/Images/Tempore/t02_circumcision.png
/b/Images/Tempore/t06_pentecost.png
/b/Images/Tempore/t07_trinity.png
/b/Images/Tempore/t01_christmas.png
/b/Images/Tempore/t00_proprium_tempore.png
/b/Images/Tempore/t03_epiphany.png
/b/Images/Tempore/t04_easter.png
/b/Images/Tempore/t08_corpus_christi.png
/b/Images/sanctus.png
/b/Images/dove.png
/b/Images/separator3.png
/b/Images/FP_Trinity_Saints.png
/b/Images/amen.png
/b/Images/print_bkg.svg
/b/Images/ihs.png
/b/Images/CS/00_common_of_saints.png
/b/Images/CS/01_dedication_of_church.png
/b/Images/border.png
/b/Images/00_ordinary.png
/b/Images/separator2.png
/b/Images/separator4.png
/b/w/6ComS/BVMp/677_BVMp1.php
/b/w/6ComS/BVMp/677_BVMp2.php
/b/w/6ComS/BVMp/677_BVMp3.php
/b/w/6ComS/BVMp/677_BVMp4.php
/b/w/6ComS/BVMp/triduum/25.php
/b/w/6ComS/BVMp/triduum/26.php
/b/w/6ComS/BVMp/triduum/27.php
/b/w/6ComS/FSSR/prayers.php
/b/w/7App/7_dolours.php
/b/w/7App/chaplet_infant.php
/b/w/7App/rosary.php
/b/w/6ComS/FSSR/690_OfficeDead.php
/b/w/7App/index.php
/b/w/100_intro.php
/b/w/1Ordinary/index.php
/b/w/2Psalter/1sunday.php
/b/w/2Psalter/2monday.php
/b/w/2Psalter/3tuesday.php
/b/w/2Psalter/4wednesday.php
/b/w/2Psalter/5thursday.php
/b/w/2Psalter/6friday.php
/b/w/2Psalter/7saturday.php
/b/w/3PropT/01_advent/index.php
/b/w/3PropT/02_nativity/index.php
/b/w/3PropT/03_epiphany/index.php
/b/w/3PropT/04_post_epiphany/index.php
/b/w/3PropT/05_septuagesima/index.php
/b/w/3PropT/06_lent/index.php
/b/w/3PropT/07_passiontide/index.php
/b/w/3PropT/08_easter/index.php
/b/w/3PropT/09_ascension/index.php
/b/w/3PropT/10_pentecost.php
/b/w/3PropT/11_post_pentecost/index.php
/b/w/5PropS/01_January.php
/b/w/5PropS/02_February.php
/b/w/5PropS/03_March.php
/b/w/5PropS/04_April.php
/b/w/5PropS/05_May.php
/b/w/5PropS/06_June.php
/b/w/5PropS/07_July.php
/b/w/5PropS/08_August.php
/b/w/5PropS/09_September.php
/b/w/5PropS/10_October.php
/b/w/5PropS/11_November_all.php
/b/w/5PropS/12_December.php
/b/w/6ComS/610_Apostles.php
/b/w/6ComS/612_ApostlesPT.php
/b/w/6ComS/620_Pope.php
/b/w/6ComS/630_Martyr.php
/b/w/6ComS/632_Martyrs.php
/b/w/6ComS/640_ConfBishop.php
/b/w/6ComS/645_Confessor.php
/b/w/6ComS/650_Virgin.php
/b/w/6ComS/655_HolyWomen.php
/b/w/6ComS/660_DedicationChurch.php
/b/w/6ComS/670_BVM.php
/b/w/6ComS/675_BVMSat.php
/b/w/7App/BVMPsSup/1sunday.php
/b/w/7App/BVMPsSup/2monday.php
/b/w/7App/BVMPsSup/3tuesday.php
/b/w/7App/BVMPsSup/4wednesday.php
/b/w/7App/BVMPsSup/5thursday.php
/b/w/7App/BVMPsSup/6friday.php
/b/w/7App/BVMPsSup/7saturday.php
`;
  const preCache = strCache.trim().split(/[\r\n]+/);

  swBrevrom.hrefs = preCache;
})();