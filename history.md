## [Under development]

## [3.3.0] - 2022-05-25

- Switched to a new integration URL (#8)

## [3.2.0] - 2020-02-09

- Updated various names according to the RoboKassa API changes (#5, #7)
    - [d36dfeb] 2020-02-09 Merge pull request #7 from andchir/master [@SilverFire]
    - [8daf876] 2020-02-09 Fields update [andchir@gmail.com]
    - [dc60f95] 2019-05-13 Merge pull request #5 from andchir/master [@SilverFire]
    - [f774d3f] 2019-05-02 update [andchir@gmail.com]
    - [999fe40] 2019-04-30 Fixed syntax error [@SilverFire]
- Other minor changes
    - [0e7c6aa] 2019-04-30 Get rid of array_push function call [@SilverFire]
    - [9dfcb81] 2019-04-30 Minor [@SilverFire]
    - [0a000fe] 2019-04-30 Currency not required. Remove currency RUB (default) [andchir@gmail.com]
    - [7d53ad2] 2019-04-30 Receipt - not required. Currency label variable name change, add currency to signature [andchir@gmail.com]
    - [8a40ebc] 2019-04-27 Parameter Receipt [andchir@gmail.com]

## [3.1.0] - 2019-01-11

- Improved `InvId` property handling
    - [dfa1a6a] 2019-01-11 Handle InvId property correctly [@SilverFire]
    - [92d1ad8] 2019-01-11 Restored order fields in CompletePurchaseResponse signature [@SilverFire]
    - [2fb084e] 2019-01-11 Fixes for Omnipay 3.0 [@SilverFire]

## [3.0] - 2018-11-15

    - [60de00f] 2018-11-15 Upgraded to OmniPay 3.0 [@SilverFire]

## [2.0] - 2018-11-15

- Implemented omnipay-robokassa merchant
    - [4166116] 2017-10-24 Fixed CompletePurchaseResponse to return TransactionReference and generate correct hash [@SilverFire]
    - [c871b51] 2017-10-24 Added TestMode support [@SilverFire]
    - [d466418] 2017-10-24 Implemented second secret key [@SilverFire]
    - [b805227] 2017-10-23 Basic implementation [@SilverFire]
    - [c76d1a2] 2017-08-19 csfixed [@hiqsol]
    - [a612a70] 2017-08-19 renamed `hidev.yml` [@hiqsol]
    - [92b6838] 2017-03-29 added more parameters to PurchaseRequest [@hiqsol]
    - [98d6871] 2017-03-29 csfixed [@hiqsol]
    - [a434256] 2017-03-29 Merge pull request #2 from bladeroot/omnipay-robokassa [@hiqsol]
    - [02774fc] 2017-03-28 robokassa init [@BladeRoot]
    - [938f3d2] 2016-04-07 added stub notice [@hiqsol]
    - [dbfacd7] 2016-04-07 deleted assets: take it from `hidev/payment-icons` [@hiqsol]
    - [a33cb7f] 2016-04-07 inited tests [@hiqsol]
    - [324f030] 2016-04-07 rehideved [@hiqsol]
    - [8feacd0] 2015-11-11 fixed namespace [@hiqsol]
    - [7ba90e5] 2015-11-09 php-cs-fixed [@hiqsol]
    - [3c03a30] 2015-11-09 started redoing to 'omnipay-robokassa' [@hiqsol]
    - [fb456d6] 2015-10-31 fixed '_secret' <- 'secret' [@hiqsol]
    - [0deda5c] 2015-10-30 changed: redone to 'system' <- 'name' [@hiqsol]
    - [3cc40e3] 2015-10-23 php-cs-fixed [@hiqsol]
    - [bcc0d60] 2015-10-23 hideved [@hiqsol]
    - [434b7b2] 2015-10-23 inited [@hiqsol]

## [Development started] - 2015-10-23

[@hiqsol]: https://github.com/hiqsol
[sol@hiqdev.com]: https://github.com/hiqsol
[@SilverFire]: https://github.com/SilverFire
[d.naumenko.a@gmail.com]: https://github.com/SilverFire
[@tafid]: https://github.com/tafid
[andreyklochok@gmail.com]: https://github.com/tafid
[@BladeRoot]: https://github.com/BladeRoot
[bladeroot@gmail.com]: https://github.com/BladeRoot
[4166116]: https://github.com//commit/4166116
[c871b51]: https://github.com//commit/c871b51
[d466418]: https://github.com//commit/d466418
[b805227]: https://github.com//commit/b805227
[c76d1a2]: https://github.com//commit/c76d1a2
[a612a70]: https://github.com//commit/a612a70
[92b6838]: https://github.com//commit/92b6838
[98d6871]: https://github.com//commit/98d6871
[a434256]: https://github.com//commit/a434256
[02774fc]: https://github.com//commit/02774fc
[938f3d2]: https://github.com//commit/938f3d2
[dbfacd7]: https://github.com//commit/dbfacd7
[a33cb7f]: https://github.com//commit/a33cb7f
[324f030]: https://github.com//commit/324f030
[8feacd0]: https://github.com//commit/8feacd0
[7ba90e5]: https://github.com//commit/7ba90e5
[3c03a30]: https://github.com//commit/3c03a30
[fb456d6]: https://github.com//commit/fb456d6
[0deda5c]: https://github.com//commit/0deda5c
[3cc40e3]: https://github.com//commit/3cc40e3
[bcc0d60]: https://github.com//commit/bcc0d60
[434b7b2]: https://github.com//commit/434b7b2
[Under development]: https://github.com/hiqdev/omnipay-robokassa/compare/3.1.0...HEAD
[2.0]: https://github.com/hiqdev/omnipay-robokassa/releases/tag/2.0
[60de00f]: https://github.com/hiqdev/omnipay-robokassa/commit/60de00f
[3.0]: https://github.com/hiqdev/omnipay-robokassa/compare/2.0...3.0
[dfa1a6a]: https://github.com/hiqdev/omnipay-robokassa/commit/dfa1a6a
[92d1ad8]: https://github.com/hiqdev/omnipay-robokassa/commit/92d1ad8
[2fb084e]: https://github.com/hiqdev/omnipay-robokassa/commit/2fb084e
[3.1]: https://github.com/hiqdev/omnipay-robokassa/compare/3.0...3.1
[3.1.0]: https://github.com/hiqdev/omnipay-robokassa/compare/3.0...3.1.0
[d36dfeb]: https://github.com/hiqdev/omnipay-robokassa/commit/d36dfeb
[8daf876]: https://github.com/hiqdev/omnipay-robokassa/commit/8daf876
[dc60f95]: https://github.com/hiqdev/omnipay-robokassa/commit/dc60f95
[f774d3f]: https://github.com/hiqdev/omnipay-robokassa/commit/f774d3f
[999fe40]: https://github.com/hiqdev/omnipay-robokassa/commit/999fe40
[0e7c6aa]: https://github.com/hiqdev/omnipay-robokassa/commit/0e7c6aa
[9dfcb81]: https://github.com/hiqdev/omnipay-robokassa/commit/9dfcb81
[0a000fe]: https://github.com/hiqdev/omnipay-robokassa/commit/0a000fe
[7d53ad2]: https://github.com/hiqdev/omnipay-robokassa/commit/7d53ad2
[8a40ebc]: https://github.com/hiqdev/omnipay-robokassa/commit/8a40ebc
[3.2.0]: https://github.com/hiqdev/omnipay-robokassa/compare/3.1.0...3.2.0
