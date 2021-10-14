var RC2KEY = '6LdBac4cAAAAABO_nymVeYO_MBvj2HKzShpwC3fh',
    doSubmit = false;

function reCaptchaVerify(response) {
    if (response === document.querySelector('.g-recaptcha-response').value) {
        doSubmit = true;
    }
}

function reCaptchaExpired () {
    /* do something when it expires */
}

function reCaptchaCallback () {
    /* this must be in the global scope for google to get access */
    grecaptcha.render('id', {
        'sitekey': RC2KEY,
        'callback': reCaptchaVerify,
        'expired-callback': reCaptchaExpired
    });
}

document.forms['conform'].addEventListener('submit',function(e){
    if (doSubmit) {
        /* submit form or do something else */
        $( "conform" ).first().submit();
    }
    else {
        console.log('Recapcha not validated!');
        return false;
    }
})
