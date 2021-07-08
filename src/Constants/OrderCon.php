<?php


namespace App\Constants;


class OrderCon
{

//    const HOST = 'dev.ampfg4.com';
    const HOST = 'ampfg4.ampprinting.com';


    const TOKENCURLY = 'ac62001e66caaa8614610284b07d50c1a7f487b1';
    const TOKENXTRA = '041b1f69b0d0060ec3c6c27afca28adadd34ddc6';

    const ADDORDER1 = [
        'Credentials' => [
            "company" => "CurlyMedia",
            "token" => "ac62001e66caaa8614610284b07d50c1a7f487b1"
        ],
        "Orders" => [
            [
                "billing_company" => "If Only",
                "first_name" => "Celia",
                "last_name" => "Peachey",
                "phone" => "518-256-3396",
                "billing_address" => "244 Jackson Street, 4th Floor",
                "billing_address2" => "",
                "billing_city" => "San Francisco",
                "billing_state" => "CA",
                "billing_zip" => "94111",
                "billing_country" => "US",
                "order_reference" => 'HELLO01',
                "note" => "This is a note for this shipment. It really could be quite a long note.\n It might even have carriage returns.",
                "OrderItem" => [
                    [
                        "customer_item_code" => "1-mon-1240",
                        "name" => "Grell",
                        "quantity" => "1"
                    ],
                    [
                        "customer_item_code" => "1-mon-1241",
                        "name" => "Chuul",
                        "quantity" => "5"
                    ]
                ],
                "Shipment" => [
                    "billing" => "Sender",
                    "carrier" => "UPS",
                    "method" => "1DA",
                    "billing_account" => "",
                    "first_name" => "Jason",
                    "last_name" => "Tempestini",
                    "email" => "jason@tempestinis.com",
                    "phone" => "925-895-4468",
                    "company" => "Curly Media",
                    "address" => "2540 25th Ave",
                    "address2" => "",
                    "city" => "Oakland",
                    "state" => "CA",
                    "zip" => "94601",
                    "country" => "US",
                    "tpb_company" => "",
                    "tpb_address" => "",
                    "tpb_city" => "",
                    "tpb_state" => "",
                    "tpb_zip" => "",
                    "tpb_phone" => ""
                ]
            ],

            [
                "billing_company" => "If Only",
                "first_name" => "Celia",
                "last_name" => "Peachey",
                "phone" => "518-256-3396",
                "billing_address" => "244 Jackson Street, 4th Floor",
                "billing_address2" => "",
                "billing_city" => "San Francisco",
                "billing_state" => "CA",
                "billing_zip" => "94111",
                "billing_country" => "US",
                "order_reference" => "order123346",
                "note" => "This is a note for this shipment.\n It can have carriage returns.",
                "OrderItem" => [
                    [
                        "catalog_id" => "1602",
                        "customer_item_code" => "",
                        "name" => "Test Item #1",
                        "quantity" => "10"
                    ],
                    [
                        "catalog_id" => "",
                        "customer_item_code" => "TestItem2",
                        "name" => "Test Item #2",
                        "quantity" => "50"
                    ]
                ],
                "Shipment" => [
                    "billing" => "Third Party",
                    "carrier" => "FedEx",
                    "method" => "Overnight",
                    "billing_account" => "7878787",
                    "first_name" => "Jason",
                    "last_name" => "Tempestini",
                    "email" => "jason@tempestinis.com",
                    "phone" => "925-895-4468",
                    "company" => "Curly Media",
                    "address" => "2540 25th Ave",
                    "address2" => "",
                    "city" => "Oakland",
                    "state" => "CA",
                    "zip" => "94601",
                    "country" => "US",
                    "tpb_company" => "Curly Media",
                    "tpb_address" => "2540 25th Ave",
                    "tpb_city" => "Oakland",
                    "tpb_state" => "CA",
                    "tpb_zip" => "94601",
                    "tpb_phone" => "925-895-4468"
                ]
            ]
        ]
    ];

    const STATUS1 = [
        "Credentials" => [
            "company" => "Curly Media",
            "token" => "146567403f8aadb4bbd468b9aa7879742704c2ca"
        ],
        "Orders" => [
            "order_numbers" =>
                [
                    "1608-ACHG",
                    "1810-ADXD",
                    "1902-AEEH",
                ],
            "order_references" =>
                [
                    "rewf",
                    "ref-this-suka!",
                ]
        ]
    ];

    static function addOrder2() {
        return json_decode('{
            "Credentials":{
                "company":"Xtracycle",
                "token":"041b1f69b0d0060ec3c6c27afca28adadd34ddc6"
            },
            "Orders":
                    [
                        {
                            "billing_company":"",
                            "first_name":"Bob",
                            "last_name":"Passaro",
                            "phone":"15416840691",
                            "billing_address":"474 Willamette St.",
                            "billing_address2":"#307",
                            "billing_city":"Eugene",
                            "billing_state":"OR",
                            "billing_zip":"97401",
                            "billing_country":"US",
                            "order_reference":"36487b",
                            "note":"",
                            "OrderItem":
                                [
                                    {
                                        "customer_item_code":"3MM3000",
                                        "name":"Mini MagicCarpet - Black",
                                        "quantity":2
                                    },
                                    {
                                        "customer_item_code":"3MB2000",
                                        "name":"SnackBars",
                                        "quantity":1
                                    }
                                    ],
                            "Shipment":
                                {
                                    "billing":"Sender",
                                    "carrier":"FedEx",
                                    "method":"Ground",
                                    "billing_account":"",
                                    "first_name":"Bob",
                                    "last_name":"Passaro",
                                    "email":"bob@figoliquinn.com",
                                    "phone":"15416840691",
                                    "company":"",
                                    "address":"474 Willamette St.",
                                    "address2":"#307",
                                    "city":"Eugene",
                                    "state":"OR",
                                    "zip":"97401",
                                    "country":"US"
                                }
                        }
                    ]
            }'
        , true);

    }
}
