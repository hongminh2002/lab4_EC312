<?php

$consumer_key = 'ck_ea6e0faba12f0b28f812cce8a6843026cee8a0d7';
$consumer_secret = 'cs_ec402c4411ee1d8e40d91315d3bb324a4a4de87c';

require __DIR__ . '/vendor/autoload.php';

set_time_limit(0);
curl_setopt($ch, CURLOPT_TIMEOUT,500); 

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://storewooshop.azurewebsites.net',
    $consumer_key,
    $consumer_secret,
    [
        'version' => 'wc/v3',
    ]
);

$data = [
    'create' => [
        [
            'name' => 'Handmade Animal Doll Crochet Kit Turtle Sewing to Use Starter Needlework Classic Birthday Gift Crochet Kit Knitting Kit Adults',
            'short_description' => 'Thương hiệu: OEM
            Xuất xứ thương hiệu: China
            Xuất xứ: China
            Sản phẩm có được bảo hành không?: Không',
            'description' => 'Type: DIY animal doll crochet kit crafty kit for beginners hand knitting animal stuffed toys making kit sewing craft for arts crafts(Note: Package is unfinished DIY doll)<br>Easy to Use: Clear instructions, high quality, and easy to make<br>Good Gifts: Perfect gift for handicraft lovers, kids, children, adults, or beginners<br>Home Decor: Also can be desktop furnishings, room crafts decoration<br>Note: This product is not finished product but a handwork sewing material package, Do your Own DIY Stuffed Toy Right Now!
            Specification:
            Material: cotton
            Size Chart:
            Finished Product Size: 9cmx6cm/3.54inchx2.36inch
            Package Includes:
            1 DIY Doll Crochet Kit
            Note:
            Please allow slightly errors due to manual measurement and different monitors.
            Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....
            ',
            'tax_class' => '1',
            'categories' => [
                [
                    'name' => 'Combo tự làm'
                ],
                [
                    'name' => 'DIY thú bông'
                ]
            ],
            'regular_price' => '158000',
            'sale_price' => '142200',
            'images' => [
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/70/a4/8f/1029ffd3a6eff921d58c5cf0afd14703.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/c6/5f/66/c1aba0eaadb38598f7efff2069170026.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/6e/8e/ed/791e85b59f12f662a50dfc3b77b5a499.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/23/cb/32/13d082a3d7a1dbd031ca27244e8b0962.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/d6/c0/e3/8554a0ddcbe6979ec648cc1c63da9c17.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/94/c5/f8/9420698324d68b3e1b58f00eb3de5d07.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/90/d0/d5/c51e24d59019b6b625751717354673a3.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/ee/34/6d/bed9589932a7859a2cb2eeb818a72455.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/80/ef/59/af98d80f26d32b802e094bc3eaa58ce7.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/8c/2c/3d/80ba0aa47af48755796a40ae03ac650a.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/24/9c/02/7b3c7473aeb7b26347b6e78c46760fc9.jpg'
                ]
            ]
        ],
        [
            'name' => 'Handmade Amigurumi Rabbit Doll Crochet Kit for DIY Crocheting And Knittings',
            'short_description' => 'Thương hiệu: OEM
            Xuất xứ thương hiệu: China
            Xuất xứ: China
            Sản phẩm có được bảo hành không?: Không',
            'description' => 'Type: DIY animal doll crochet kit crafty kit for beginners hand knitting animal stuffed toys making kit sewing craft for arts crafts(Note: Package is unfinished DIY doll)<br>Easy to Use: Clear instructions, high quality, and easy to make<br>Good Gifts: Perfect gift for handicraft lovers, kids, children, adults, or beginners<br>Home Decor: Also can be desktop furnishings, room crafts decoration<br>Note: This product is not finished product but a handwork sewing material package, Do your Own DIY Stuffed Toy Right Now!
            Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....
            ',
            'tax_class' => '1',
            'categories' => [
                [
                    'name' => 'Combo tự làm'
                ],
                [
                    'name' => 'DIY thú bông'
                ]
            ],
            'regular_price' => '192000',
            'sale_price' => '172800',
            'images' => [
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/2e/0b/a8/336b97235014e359409d53b077d1f36e.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/2f/8d/bd/eb18303e8a0dcca704d3f6bd06e14c3b.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/52/7c/c3/70675773cd6f85aa82fef180cd78372e.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/45/d3/d8/0ccfea1dc506eb118a872c226cc80adc.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/b7/fc/fe/93e5c23e797027d172cc44a470e9aaa5.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/08/d9/20/83e00c435dece3bb5154e77dc7e54af6.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/87/6f/e2/8ce5f12e0534aa542f8c1f6d0b1642c4.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/e2/0b/f6/74877d6c91290acd5866770c54695045.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/4a/8c/eb/19c8ee5242d772ea147894dff9f123e5.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/f8/db/34/b681a9f53d543f7f59d62f4321f330cc.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/91/04/ba/e0682c287cf527a58eaa972d8a8a48aa.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/44/b2/7f/58d10b9e74025b4ee1914f7582ddf394.jpg'
                ]
            ]
        ],
        [
            'name' => 'DIY Material Package Beginner Crochet Kit, Make Your Own Stuffed Plush Doll for Handicraft Lovers Hand Knitting Home Decor Keychain Pendants',
            'short_description' => 'Thương hiệu: OEM
            Xuất xứ thương hiệu: China
            Xuất xứ: China
            Sản phẩm có được bảo hành không?: Không',
            'description' => 'Material: This Diy crochet kit is made of polyester, durable, lightweight and comfortable.<br>Features: This doll toy crochet kit is a handmade material package, not a finished item.<br>Size: The finished doll size is 5.5cmx9cm/2.17inchx3.54inch, great for you to hang on the bags.<br>Easy Using: This doll toy crochet kit is perfect for beginners and handicraft lovers.<br>Gift: After you finishing knitting, you can send this handwork craft to families and friends for gifts.
            Please allow slightly errors due to manual measurement and different monitors.
            Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....
            ',
            'tax_class' => '1',
            'categories' => [
                [
                    'name' => 'Combo tự làm'
                ],
                [
                    'name' => 'DIY thú bông'
                ]
            ],
            'regular_price' => '168000',
            'sale_price' => '151200',
            'images' => [
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/41/82/37/01e3afea7dadc15547c0c8df3cb1c593.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/7f/4c/fc/12e071b42044fd54209f6d6164208c90.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/5d/c5/b5/32dfb538d4399ef78ba4cf0764e6d0b1.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/78/52/35/41e7f3c0576ccc1b72e8bb6f8751b1e0.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/94/8c/1e/0b1e2ad50bd9024377013c9b21e2832c.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/1f/1b/b1/15eb752a71546fbe92ff2efcd8b054a8.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/24/87/c7/04566b066933b65958329ec59b0d0132.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/33/c2/e5/e41ea83d6e6ec8367a500e1b9a903dcb.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/23/ac/36/193eb4db7e02beab07e5b463b6a58409.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/53/21/5f/3dc9ba388f13d937d6db118b7ea261f7.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/9e/c4/55/c9ceeb1cd975aff77eb6064fe5b908f5.jpg'
                ],
                [
                    'src' => 'https://salt.tikicdn.com/ts/product/52/ff/64/786ec3fc14cae0875f644cb0722e3eef.jpg'
                ]
            ]
        ]
    ],
    'update' => [
        [
            'id' => 12041,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ],
            'manage_stock' => true,
            'stock_quantity' => 0
        ],
        [
            'id' => 12027,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ]
        ],
        [
            'id' => 12012,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ]
        ]
    ],
    'delete' => [
        11014,
        11971
    ]
];  

/* $data = [
    'update' => [
        [
            'id' => 12041,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ],
            'manage_stock' => true,
            'stock_quantity' => 0
        ],
        [
            'id' => 12027,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ]
        ],
        [
            'id' => 12012,
            'categories' => [
                [
                    'id' => 74
                ],
                [
                    'id' => 1396
                ]
            ]
        ]
    ]
]; */

/* $data = [
    'delete' => [
        11014,
        11971
    ]
];  */


print_r($woocommerce->post('products/batch', $data));



