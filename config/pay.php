<?php

return [
    'alipay' => [
        'app_id'         => '2016102600763960',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAn+PuV/fvgzcPdB4NU7/+tmeME7gICAWpNE8nUoAQ3NFUvvwt+0Z2S9b06lTCd4kgemyTJtxsFdigWrxdU8PsPwKG5kjKFyZx/eBXfNY49dxRTIWCciRjo3nOY/Vzl2NxnAApRxFdJ8RicKmpjpiyxVgI+VX+IzjJLyTA5uer6PH1VwwU4bRezgBT+Q0Kqq2ooOOJ64KPuWQxqsMxivohe3SSKrwzjTyAbPxnEMkYfEiquaHiFti+/xT6hCujfpq6qzmOvbtIdW1WAPWM4zYjhN6uBYktGh7xUnM+IVc5Jq07PSZRk4ZGLMHQHOI88qYwcBdVBIbH/wxm30mIxtfF1QIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAg++1SgQcYKp06jNI8a+VIepYGJ5nKJWRMDi9fOLJ4w7lpiAMs6ufip6es0GCOzWDx57yLF6KB897j+5w2CB7zO8yPzXA94/Hw3k9W+VdQkWtjc4EUOUuemBq5M0C+n4S9TyBYd+9ldlU+zdUkgCVoxuCNFV4r05Ul2DrB/0MFDWkF6Sn1jt6hWgGUJnfW0pB/du1I3BYNk0CovTZE6muRViaIkx8JGqEJ0e4lGn5o9wegUUBxTUN4w/nxjCIOw1jtAIBH6PL25hieWbNjTSsvHMRtsykR7AyLwIT7Uzmr22SlIzGeCnHSjY2hBhfeRXXyA4ji+L6957gIh/yahYV5wIDAQABAoIBAF/npFlsSZB+98OyieidYIOpzGYA5y3aIxLxe9RHKsfxcT/j9je4np1uFiBpkxglG2jFAnb8Ncvdp40Fn2OLoVJj4ZuPIHkUO/q8q7ycKsFc0v7Mbdi776AnbCxrVint8Svw0n/p2u8Nbze5jbEf2aYZ/fi61KJiBx2O5uoEqH4bP9pe1Eo2rfD3u4XWx4sIgflUq6Cy3rUY2S0tdTIa+tZ3EPHIqZYGQVCpnFCcGT25uIc982vPzeBw0HjT0P12n44b+3crGuUfxBeoUG74Fl8fOCJ0nbOzBRogPgRsmFj77y+rB76h2slfxSUcqLilFTcNDuPEhtlx2O/+UHLG2BkCgYEAx3czHKMbEqsYH0XSa3pjBPDjdGyMNlMD03b2b6KSs0PG3cEXk8OHkypwb++uE3crQWae1oEFDt1CVKJZZ9WZe8GNWQPiTqa+6b1BZVLXkKz/X3DkMaSTpcg7g1hQPswQ7nLLxkLM5morxAk4W3vDNZ5108aQr0kr9+2/apqjXiUCgYEAqVS6p8mu3OfZsCrtulGRqrgPoPpOuU87EkLNTJeqviVixcCZIwucgBzN7Z3LU/Sw9YRporL+MwdLECFDx4NT1z3V819RH6i0Ntm7VvBpqo4PRThQUk6W3eTBhf9bZA68vSz3vxB2o06QqL1GLqOscLZoPmX9KrEw67WKBNMiCBsCgYB21rfnCe5pUvKOP0U8r7ArE3IQvVNUUmVnKettW4jXsTvchtyLNuWhcpmGt2AZTNjCoGdmGXxv/Lc2QXvO9134c7rJHB1LCuGX1SAPRCoWklub+2CZixpEnWWHvaghoec8ibyKpOX7Kaplo7CmILiPS5eb0yQEqy29CzMOSo+m2QKBgQCaU8Cyv5wBdcXvS5DTKRiL8ak83CT3u4BpCj02O1zAZC57cSegyypdkOMWV6RC5laJzZ7BTEVlmJYPI2I06jp1h8QBRbQYGJf3DcYyXHbRnRvJyKNcAIh7v8upJqzSqqPV/q/lkUmvWSF6yNa4FzBIodasWCO+zzN5AEHEV/FCVQKBgQDG4w3qeHCgRYDF2OWkJ9KQr7F4Tm5TLnN8rGNyuy7gABFCIhFzI8qRd0W4La3k17xXMogQ08G8qBY8p7FwvCvKDjGo3lmMO/xjzq+dgHxHk3T3NCXX9AqXhn7SD8zvDHFIycBChKcagFS4sTuA4Z7aYS0/1jP3Y8dv+U1DaWAhbA==',
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
