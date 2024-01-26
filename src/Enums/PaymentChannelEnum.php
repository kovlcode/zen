<?php

namespace Kovlcode\Zen\Enums;

enum PaymentChannelEnum: string
{
    //ApplePay
    case PCL_APPLEPAY = 'PCL_APPLEPAY';

    // Bancontact
    case PCL_BANCONTACT = 'PCL_BANCONTACT';

    // BLIK
    case PCl_BLIK_REDIRECT = 'PCl_BLIK_REDIRECT';
    case PCL_BLIK = 'PCL_BLIK';

    // GooglePay
    case PCL_GOOGLEPAY = 'PCL_GOOGLEPAY';

    // Ideal
    case PCL_IDEAL = 'PCL_IDEAL';

    // Mastercard | Visa
    case PCL_CARD = 'PCL_CARD';

    // Neosurf
    case PCL_NEOSURF = 'PCL_NEOSURF';

    // Neteller
    case PCL_NETELLER_WALLET = 'PCL_NETELLER_WALLET';

    // Pay By Link
    case PCL_PBL_ALIOR = 'PCL_PBL_ALIOR';
    case PCL_PBL_BNPPARIBAS = 'PCL_PBL_BNPPARIBAS';
    case PCL_PBL_BOS = 'PCL_PBL_BOS';
    case PCL_PBL_BZWBK = 'PCL_PBL_BZWBK';
    case PCL_PBL_CITI = 'PCL_PBL_CITI';
    case PCL_PBL_CREDITAGRICOLE = 'PCL_PBL_CREDITAGRICOLE';
    case PCL_PBL_MILLENNIUM = 'PCL_PBL_MILLENNIUM';
    case PCL_PBL_NOBLE = 'PCL_PBL_NOBLE';
    case PCL_PBL_PEKAO24 = 'PCL_PBL_PEKAO24';
    case PCL_PBL_IPKO = 'PCL_PBL_IPKO';
    case PCL_PBL_GETIN = 'PCL_PBL_GETIN';
    case PCL_PBL_INTELIGO = 'PCL_PBL_INTELIGO';
    case PCL_PBL_IDEABANK = 'PCL_PBL_IDEABANK';
    case PCL_PBL_ING = 'PCL_PBL_ING';
    case PCL_PBL_MTRANSFER = 'PCL_PBL_MTRANSFER';
    case PCL_PBL_PBS = 'PCL_PBL_PBS';
    case PCL_PBL_NEST = 'PCL_PBL_NEST';
    case PCL_PBL_PLUS = 'PCL_PBL_PLUS';
    case PCL_PBL_BS = 'PCL_PBL_BS';

    // PayByZen
    case PCL_PBZ = 'PCL_PBZ';

    // PayPal
    case PCL_PAYPAL = 'PCL_PAYPAL';

    //Paysafecard
    case PCL_PAYSAFECARD_WALLET = 'PCL_PAYSAFECARD_WALLET';
    case PCL_PAYSAFECARD_PINCODE = 'PCL_PAYSAFECARD_PINCODE';

    // Paysafecash
    case PCL_PAYSAFECASH = 'PCL_PAYSAFECASH';

    // Skrill
    case PCL_SKRILL_WALLET = 'PCL_SKRILL_WALLET';

    // Dragon
    case PCL_DRAGON = 'PCL_DRAGON';

    // Trustly
    case PCL_TRUSTLY = 'PCL_TRUSTLY';

    // Union Pay
    case PCL_UPI = 'PCL_UPI';

    // Webmoney
    case PCL_WEBMONEY = 'PCL_WEBMONEY';

    // WeChat
    case PCL_WECHAT = 'PCL_WECHAT';
}
