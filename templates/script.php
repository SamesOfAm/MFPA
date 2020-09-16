<script>

    // SLIDER -----------------------------------------------------------------

    if(document.querySelector('.slider-menu')) {
        let sliderButtons = document.querySelector('.slider-menu').children;
        for (let i = 0; i < sliderButtons.length; i++) {
            sliderButtons[i].innerHTML = '';
        }
    }

    // TO-TOP -----------------------------------------------------------------

    jQuery('.to-top-button').click(function(){
        jQuery('html, body').animate({scrollTop:'0px'},800);
        return !1;
    });

    // FONTSIZER --------------------------------------------------------------

    let fontsize = parseInt(window.getComputedStyle(document.body).fontSize.substr(0,2));
    let initialFontsize = fontsize;
    function fontsizer(setting){
        switch (setting){
            case "kleiner":
                fontsize -= 1;
                break;
            case "normal":
                fontsize = initialFontsize;
                break;
            case "groesser":
                fontsize += 1;
                break;
        }
        const allArticles = document.querySelectorAll('.mod_article');
        for (let i = 0; i < allArticles.length; i++) {
            allArticles[i].style.fontSize = fontsize + "px";
        }
        const allCaptions = document.querySelectorAll('.caption');
        for (let i = 0; i < allCaptions.length; i++) {
            allCaptions[i].style.fontSize = fontsize + "px";
        }
    }

    // CONTRAST-BUTTON --------------------------------------------------------

    const darkBlue = '#0d2067';
    const brightBlue = '#00AEEF';

        let highContrast = false;
    function toggleContrast() {
        if(highContrast) {
            document.body.style.color = darkBlue;
            document.querySelector('.header-navigation-wrapper').style.background = darkBlue;
            if(document.querySelector('.topics')){
                document.querySelector('.topics').style.background = 'url(\'files/assets/layout/layer-bg.png\') no-repeat -350px bottom, linear-gradient(to right, #0d2067, #0d2067 60%, #00AEEF)';
            }
            if(document.querySelector('.research-development')){
                document.querySelector('.research-development').style.background = 'url(\'files/assets/layout/layer-bg.png\') no-repeat -350px bottom, url(\'../layout/stripe-bg-large.png\') repeat-x 0 -150px, linear-gradient(to right, #0d2067, #0d2067 60%, #00Aa)';
            }
            document.querySelector('#footer').style.background = 'url(\'files/assets/layout/layer-bg-footer.png\') no-repeat left -400px, url(\'../layout/footer-bg.svg\') no-repeat 65vw center, linear-gradient(to right, #0d2067, #0d2067 60%, #00AEEF)';
            if(document.querySelectorAll('.caption')){
                const captions = document.querySelectorAll('.caption');
                for (let i = 0; i < captions.length; i++) {
                    captions[i].style.background = '#0d2067cc';
                }
            }
            if(document.querySelectorAll('.section-intro')){
                const allSectionIntros = document.querySelectorAll('.section-intro');
                for (let i = 0; i < allSectionIntros.length; i++){
                    const allBlueParagraphs = allSectionIntros[i].querySelectorAll('p');
                    for (let i = 0; i < allBlueParagraphs.length; i++){
                        allBlueParagraphs[i].style.color = brightBlue;
                    }
                }
            }
            highContrast = false;
        } else {
            document.body.style.color = 'black';
            document.querySelector('.header-navigation-wrapper').style.background = 'black';
            if(document.querySelector('.topics')) {
                document.querySelector('.topics').style.background = 'black';
            }
            if(document.querySelector('.research-development')){
                document.querySelector('.research-development').style.background = 'black';
            }
            document.querySelector('#footer').style.background = 'black';
            if(document.querySelectorAll('.caption')){
                const captions = document.querySelectorAll('.caption');
                for (let i = 0; i < captions.length; i++) {
                    captions[i].style.background = 'black';
                }
            }
            if(document.querySelectorAll('.section-intro')){
                const allSectionIntros = document.querySelectorAll('.section-intro');
                for (let i = 0; i < allSectionIntros.length; i++){
                    const allBlueParagraphs = allSectionIntros[i].querySelectorAll('p');
                    for (let i = 0; i < allBlueParagraphs.length; i++){
                        allBlueParagraphs[i].style.color = 'black';
                    }
                }
            }
            highContrast = true;
        }
    }

</script>