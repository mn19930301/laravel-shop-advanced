<?php

return [
    /*
        商家账号jrweav2058@sandbox.com
        商户UID2088621954877481
        登录密码111111
        账户余额  21067.51充值取现

        买家账号kogiis5786@sandbox.com
        登录密码111111
        支付密码111111
        用户名称沙箱环境
        证件类型身份证(IDENTITY_CARD)
        证件号码136250193908018511
        账户余额 9978805.99充值取现
    */
    'alipay' => [
        'app_id'         => '2021000116673082',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgIsj7Dlv/EyB4s6/63BISk3iQH1vISjtUWXo1+B37d7ko2gaJTqiwOpQQwy64zE7J0IKv+zqFvPdoAv7u5epQeOqqofhUCWHtOHb471E5bIjb6z/gkWzQfLU2dzSD4Ai0vdBuRuinkZSMuYfWpl9J3fKutG9IHRXYDz+TH+9xZoKY1NcTw0S8Mg/QpApPuqp3swpBSYwBRQBtz7zpTmw4c/bcYQVZrM9HLOyBoU8oz4xi8WGvGM05L/Eu8nGLa0Ko2g+45GwJhiDU8B4hFiwQbB3pzN8OVYV8nbBinsOn2xbp6RvXOIiGrey/bnpC+fvHl4rcRUkJ+yrnG3KMapXwQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAmpRCy41bBEkJnDY2rhi32BB9h7s0KXFc2LYQIlw4NKQGgrIMfZ9WCE49+5cCd3mKtu09/4j7tjn0ZCKgXo6DewC9xRHDx2z8b9JPNhfRyAaFDLykF/uDkl9w+mT81SF5UgAnjtbJ3jBUNNFbKhKrW3NGt8J/uUI7wPnw+mrIYd3JlijIZFGQRDLuf77MyQJKQDW0iuYVobXjW/uFEATMAg/N6EWXZSt6wsEDZZMUbvqzlXAIMc7P9lM1YSlibQoBZA9nF/mE11Wg0ukoU5UM3zgqJ1Pd3zbhEQU1GqkClWYoqDCJYP8mMVNSkUnYCeI4K5ZhZWNK/V8CsxbFrqtatQIDAQABAoIBAG3uotJAZUpW5w7BP4Hw8k4m7B9rc11F0dINKMxG6XIGdNrd5SQx/O1LN6mFa6usNIqDjmP894ZREQ1l0sdscvU3Qb61M5bQW3brCopdxkOK33R/c/PaW2ftmFt7FpQ8ihtXIMrk1gu+MySc/0icnmEbSl/FYzBNelFzb32oE3oFLu5TuvA8KWUBvUTRdm19zMuRVBW3qJHAopa3/ESp0gfSpSWpi5vL1iCAFPTlZ4Va40TwpwQC3hYKzRBMvYPdW7tbxcppLVNNXIC6mbEiPI1vGXuXb8VFaEawkWF3g+44TmUnrp7Mkz2CZsg7KyCwDKn5bvHW1xWcE7/0hL6hTMECgYEA+XRoNIukq50E+d9RYiD4DniZRaXfgg2x78lSsbAww7sRQmf8wdJImIDzohP1XdXpMTtxEus2tsRY2zDTIhCRHCgVexde3sxOsN+9ipxQk7zzxXTUZvrs6XCL4vqnFeZ3XcdLYnGRORqURPOK8eoHPYq639pGYkSifAmp6js3rIcCgYEAnqKSkHwvQc0r1Xr/JqQ84oc0NQeWL1dTjHJvxh9gm0tzW0vTgUQD6ra9Lg5q2W2NuhHSxpW4sOsYp41DGuuSeKb5puSpz0duYBkCKp0wXGX1yfdkbBmxVHObBeuUvt2H5sBB70U6gQbPBiz7hNym96xWI+MjigEiPeraEZGmaeMCgYEA1aYPgcGAHcNz+ZZ8m3DlQ2+ixnYUgcy880QYYTsn6NuVIqzxXAeASa1X/R7e7alB+fqRE8UErXBpMgIVMn3B6r2h+DTB+kw9sVtPeSH8GSyiFCHFsRWER0MvbA2FgUpMPbNtKzldSe0rxApanGr2HI1vFD5cPdnO2DFmp8hkHI0CgYAOu9zPDKm6+9pxZo4iQajiBVrE/iJl3T+GUO6uwSVQ5y4csatAW1fdygFCMNadwT4jpRollaxkykEs9sLf0jd1e1S+uohHF0RaKph36seeHV451v99xtkgleg1IY9cNukzdnHpTk3DxCUgVrc5vODJKjmJ9cPMQpSymYiNjzCcrwKBgGhGttCcVhVCauprt42Sx3r94PUtMGdflvE5a44IK680sPCmdjaFkOdqvA0HmEji1FvPuLZcRfbp36nK5srkkKVtTl8hNUWgSvL7nuM1QUTiGr4HNqHptMCM9iP8IYXemEgF6eLQ4fMGqIXe3SDzwuFlUOS/zJAfmPV/gQAeC6HP',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
