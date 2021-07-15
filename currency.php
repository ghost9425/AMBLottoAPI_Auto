<?php include 'layouts/header.php'; ?>
<div class="wrapper container">
    <?php include 'layouts/nav.php'; ?>
    <main class="" style="padding-left: 15rem; transition: all 0.3s ease-in-out 0s;">
        <?php include 'layouts/lang.php'; ?>
        <div class="body-content">

            <div style="background: #f2f3f4; padding: 30px; margin-top: 1%; border-radius: .375rem;">

                <h1><b style="color: #cfa137 !important;" data-translate="6">6. Currency / Bet Limit</b></h1>
                <div class="col-12" id="tab1">
                    <lable><b style="color: #cfa137 !important;">6.1 Currency</b></lable>
                </div>
                <div class="form-group col-12 ex" style="margin-top: 10px;">
                    <lable><b style="color: #cfa137 !important;">Ratio 1:10 / 1:100 / 1:1,000 is only on settlement.</b>
                    </lable>
                </div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable5">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:CurrencyShort" class="txtCenter bRight" style="width: 180px;">
                                            Currency short name</th>
                                        <th set-lan="html:Ratio" class="txtCenter bRight">Ratio</th>
                                        <th set-lan="html:Status" class="txtCenter bRight">Status</th>
                                        <th set-lan="html:CurrencyDescription" class="txtCenter">Currency Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">BND</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: red;">Unavailable</td>
                                        <td>Brunei Dollar</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">KHR</td>
                                        <td class="bRight txtCenter">1:100</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Cambodian Riel</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">IDR</td>
                                        <td class="bRight txtCenter">1:1,000</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Indonesian Rupiah</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">LAK</td>
                                        <td class="bRight txtCenter">1:100</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Lao Kip</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">MYR</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Malaysian Ringgit</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">MMK</td>
                                        <td class="bRight txtCenter">1:100</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Myanmar Kyat</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">PHP</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Philippine Peso</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">SGD</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Singapore Dollar</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">THB</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Thai Baht</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">CNY</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Chinese Yuan</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">USD</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>United States Dollar</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">JPY</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Japanese Yen</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">HKD</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Hong Kong Dollar</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">VND</td>
                                        <td class="bRight txtCenter">1:1,000</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Vietnamese Dong</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">EUR</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Euro (European Monetary Unit)</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">INR</td>
                                        <td class="bRight txtCenter">1:1</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>Indian</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">KRW</td>
                                        <td class="bRight txtCenter">1:10</td>
                                        <td class="bRight txtCenter" style="color: green;">Available</td>
                                        <td>South Korean won</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12" id="tab2">
                    <lable><b style="color: #cfa137 !important;">6.2 BND - Brunei Dollar</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable52">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">No data available in table</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab3">
                    <lable><b style="color: #cfa137 !important;">6.3 KHR - Cambodian Riel</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:100)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable53">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">15001</td>
                                        <td class="bRight txtRight">15</td>
                                        <td class="bRight txtRight">1,500</td>
                                        <td class="txtCenter">KHR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">15002</td>
                                        <td class="bRight txtRight">150</td>
                                        <td class="bRight txtRight">15,000</td>
                                        <td class="txtCenter">KHR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">15003</td>
                                        <td class="bRight txtRight">1,500</td>
                                        <td class="bRight txtRight">150,000</td>
                                        <td class="txtCenter">KHR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">15004</td>
                                        <td class="bRight txtRight">15,000</td>
                                        <td class="bRight txtRight">300,000</td>
                                        <td class="txtCenter">KHR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab4">
                    <lable><b style="color: #cfa137 !important;">6.4 IDR - Indonesian Rupiah</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:1,000)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable54">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">6001</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">6002</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">6003</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">6004</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">15,000</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">6005</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">30,000</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">6006</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">IDR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab5">
                    <lable><b style="color: #cfa137 !important;">6.5 LAK - Lao Kip</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:100)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable55">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">17001</td>
                                        <td class="bRight txtRight">350</td>
                                        <td class="bRight txtRight">35,000</td>
                                        <td class="txtCenter">LAK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">17002</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">LAK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">17003</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="bRight txtRight">300,000</td>
                                        <td class="txtCenter">LAK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">17004</td>
                                        <td class="bRight txtRight">145,000</td>
                                        <td class="bRight txtRight">720,000</td>
                                        <td class="txtCenter">LAK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab6">
                    <lable><b style="color: #cfa137 !important;">6.6 MYR - Malaysian Ringgit</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable56">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">3001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3002</td>
                                        <td class="bRight txtRight">3</td>
                                        <td class="bRight txtRight">120</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3003</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3004</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3005</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3006</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3007</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3008</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3009</td>
                                        <td class="bRight txtRight">300</td>
                                        <td class="bRight txtRight">12,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3010</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="bRight txtRight">16,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3011</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3012</td>
                                        <td class="bRight txtRight">700</td>
                                        <td class="bRight txtRight">28,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3013</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="bRight txtRight">32,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">3014</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">MYR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab7">
                    <lable><b style="color: #cfa137 !important;">6.7 MMK - Myanmar Kyat</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:100)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable57">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">16001</td>
                                        <td class="bRight txtRight">4</td>
                                        <td class="bRight txtRight">880</td>
                                        <td class="txtCenter">MMK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">16002</td>
                                        <td class="bRight txtRight">22</td>
                                        <td class="bRight txtRight">4,400</td>
                                        <td class="txtCenter">MMK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">16003</td>
                                        <td class="bRight txtRight">440</td>
                                        <td class="bRight txtRight">13,000</td>
                                        <td class="txtCenter">MMK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">16004</td>
                                        <td class="bRight txtRight">2,200</td>
                                        <td class="bRight txtRight">45,000</td>
                                        <td class="txtCenter">MMK</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">16005</td>
                                        <td class="bRight txtRight">23,000</td>
                                        <td class="bRight txtRight">110,000</td>
                                        <td class="txtCenter">MMK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab8">
                    <lable><b style="color: #cfa137 !important;">6.8 PHP - Philippine Peso</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable58">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">8001</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8002</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8003</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8004</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8005</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8006</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8007</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8008</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8009</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="bRight txtRight">80,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8010</td>
                                        <td class="bRight txtRight">3,000</td>
                                        <td class="bRight txtRight">120,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8011</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="bRight txtRight">160,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8012</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="bRight txtRight">200,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">8013</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="bRight txtRight">400,000</td>
                                        <td class="txtCenter">PHP</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab9">
                    <lable><b style="color: #cfa137 !important;">6.9 SGD - Singapore Dollar</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable59">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">11001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11002</td>
                                        <td class="bRight txtRight">2</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11003</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11004</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11005</td>
                                        <td class="bRight txtRight">30</td>
                                        <td class="bRight txtRight">1,200</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11006</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="bRight txtRight">1,600</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11007</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11008</td>
                                        <td class="bRight txtRight">150</td>
                                        <td class="bRight txtRight">6,000</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11009</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">11010</td>
                                        <td class="bRight txtRight">250</td>
                                        <td class="bRight txtRight">11,000</td>
                                        <td class="txtCenter">SGD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab10">
                    <lable><b style="color: #cfa137 !important;">6.10 THB - Thai Baht</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable510">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">1001</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1002</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1003</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1004</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1005</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1006</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1007</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1008</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1009</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="bRight txtRight">80,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1010</td>
                                        <td class="bRight txtRight">3,000</td>
                                        <td class="bRight txtRight">120,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1011</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="bRight txtRight">160,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1012</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="bRight txtRight">200,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1013</td>
                                        <td class="bRight txtRight">6,000</td>
                                        <td class="bRight txtRight">250,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1014</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1015</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1016</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1017</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">100,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1018</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="bRight txtRight">200,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1019</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1020</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">1021</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">THB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab11">
                    <lable><b style="color: #cfa137 !important;">6.11 CNY - Chinese Yuan</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable511">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">2001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2002</td>
                                        <td class="bRight txtRight">2</td>
                                        <td class="bRight txtRight">80</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2003</td>
                                        <td class="bRight txtRight">4</td>
                                        <td class="bRight txtRight">160</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2004</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2005</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2006</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2007</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2008</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2009</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="bRight txtRight">16,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2010</td>
                                        <td class="bRight txtRight">600</td>
                                        <td class="bRight txtRight">24,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2011</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="bRight txtRight">32,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2012</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">2013</td>
                                        <td class="bRight txtRight">1,200</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">CNY</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab12">
                    <lable><b style="color: #cfa137 !important;">6.12 USD - United States Dollar</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable512">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">4001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4002</td>
                                        <td class="bRight txtRight">2</td>
                                        <td class="bRight txtRight">80</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4003</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4004</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4005</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4006</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4007</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4008</td>
                                        <td class="bRight txtRight">150</td>
                                        <td class="bRight txtRight">6,000</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">4009</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">USD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab13">
                    <lable><b style="color: #cfa137 !important;">6.13 JPY - Japanese Yen</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable513">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">5001</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5002</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5003</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5004</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5005</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5006</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5007</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5008</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="bRight txtRight">80,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5009</td>
                                        <td class="bRight txtRight">3,000</td>
                                        <td class="bRight txtRight">120,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5010</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="bRight txtRight">200,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5011</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="bRight txtRight">400,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5012</td>
                                        <td class="bRight txtRight">15,000</td>
                                        <td class="bRight txtRight">600,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">5013</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="bRight txtRight">800,000</td>
                                        <td class="txtCenter">JPY</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab14">
                    <lable><b style="color: #cfa137 !important;">6.14 HKD - Hong Kong Dollar</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable514">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">7001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7002</td>
                                        <td class="bRight txtRight">2</td>
                                        <td class="bRight txtRight">80</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7003</td>
                                        <td class="bRight txtRight">4</td>
                                        <td class="bRight txtRight">160</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7004</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7005</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7006</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7007</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7008</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7009</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="bRight txtRight">16,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7010</td>
                                        <td class="bRight txtRight">600</td>
                                        <td class="bRight txtRight">24,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7011</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="bRight txtRight">32,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7012</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">7013</td>
                                        <td class="bRight txtRight">1,200</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">HKD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab15">
                    <lable><b style="color: #cfa137 !important;">6.15 VND - Vietnamese Dong</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:1,000)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable515">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">9001</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9002</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9003</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9004</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9005</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9006</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="bRight txtRight">8,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9007</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">20,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9008</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">40,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9009</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="bRight txtRight">80,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9010</td>
                                        <td class="bRight txtRight">3,000</td>
                                        <td class="bRight txtRight">120,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9011</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="bRight txtRight">160,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">9012</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="bRight txtRight">180,000</td>
                                        <td class="txtCenter">VND</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab16">
                    <lable><b style="color: #cfa137 !important;">6.16 EUR - Euro (European Monetary Unit)</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable516">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">12001</td>
                                        <td class="bRight txtRight">1</td>
                                        <td class="bRight txtRight">40</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12002</td>
                                        <td class="bRight txtRight">5</td>
                                        <td class="bRight txtRight">200</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12003</td>
                                        <td class="bRight txtRight">10</td>
                                        <td class="bRight txtRight">400</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12004</td>
                                        <td class="bRight txtRight">20</td>
                                        <td class="bRight txtRight">800</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12005</td>
                                        <td class="bRight txtRight">50</td>
                                        <td class="bRight txtRight">2,000</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12006</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">4,000</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12007</td>
                                        <td class="bRight txtRight">130</td>
                                        <td class="bRight txtRight">5,200</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">12008</td>
                                        <td class="bRight txtRight">150</td>
                                        <td class="bRight txtRight">7,000</td>
                                        <td class="txtCenter">EUR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab17">
                    <lable><b style="color: #cfa137 !important;">6.17 INR - Indian</b></lable>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable517">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">13001</td>
                                        <td class="bRight txtRight">100</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13002</td>
                                        <td class="bRight txtRight">350</td>
                                        <td class="bRight txtRight">3,500</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13003</td>
                                        <td class="bRight txtRight">500</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13004</td>
                                        <td class="bRight txtRight">1,000</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13005</td>
                                        <td class="bRight txtRight">3,000</td>
                                        <td class="bRight txtRight">30,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13006</td>
                                        <td class="bRight txtRight">5,000</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13007</td>
                                        <td class="bRight txtRight">10,000</td>
                                        <td class="bRight txtRight">100,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13008</td>
                                        <td class="bRight txtRight">30,000</td>
                                        <td class="bRight txtRight">300,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13009</td>
                                        <td class="bRight txtRight">50,000</td>
                                        <td class="bRight txtRight">500,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">13010</td>
                                        <td class="bRight txtRight">58,000</td>
                                        <td class="bRight txtRight">580,000</td>
                                        <td class="txtCenter">INR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="tab18">
                    <lable><b style="color: #cfa137 !important;">6.18 KRW - South Korean won</b></lable><span
                        style="color: red; font-size: 0.75rem; margin-left: 0.5rem;">*(This rate calculate by
                        1:10)*</span>
                </div>
                <div class="pb-3"></div>
                <div class="btn-toolbar mb-3" role="toolbar">
                    <div class="form-group col-1"></div>
                    <div class="form-group col-9">
                        <div class="table-wrapper">
                            <table class="table table-borderless table-striped" id="DataTable518">
                                <thead class="rgba-green-slight">
                                    <tr>
                                        <th set-lan="html:LimitID" class="txtCenter bRight">Limit ID</th>
                                        <th set-lan="html:Minimum" class="txtCenter bRight">Minimum</th>
                                        <th set-lan="html:Maximum" class="txtCenter bRight">Maximum</th>
                                        <th set-lan="html:Currency" class="txtCenter">Currency</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bRight txtCenter">14001</td>
                                        <td class="bRight txtRight">350</td>
                                        <td class="bRight txtRight">3,500</td>
                                        <td class="txtCenter">KRW</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">14002</td>
                                        <td class="bRight txtRight">3,500</td>
                                        <td class="bRight txtRight">35,000</td>
                                        <td class="txtCenter">KRW</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">14003</td>
                                        <td class="bRight txtRight">35,000</td>
                                        <td class="bRight txtRight">500,000</td>
                                        <td class="txtCenter">KRW</td>
                                    </tr>
                                    <tr>
                                        <td class="bRight txtCenter">14004</td>
                                        <td class="bRight txtRight">70,000</td>
                                        <td class="bRight txtRight">900,000</td>
                                        <td class="txtCenter">KRW</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="btn-toolbar mb-12">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info waves-effect waves-light"
                            onclick="location.href='responsecode.php'">
                            <lan set-lan="html:Back">Back</lan>
                        </button>
                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <button type="button" class="btn btn-info waves-effect waves-light"
                            onclick="location.href='detail.php'">Next</button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'layouts/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#manu5 , #manu5 > a").addClass("active");
        $("#manu5 > div").css("display", "block");

        var URL = window.location.href;
        URL = URL.substring(URL.lastIndexOf('#') + 1);
        var page = 5;
        var link = url_link(page, URL);
        $("#" + link + " , #" + link + " > a").addClass("active");
    });
</script>

</body>

</html>