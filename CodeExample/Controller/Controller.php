<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2017 BurpSuite:Async
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * License: MIT
 *    Time: 2017-02-01 02:03:00
 *    Note: CloudGate Controller
 *  Author: Eval,BurpSuite
 */

# CloudGate 控制器
require_once "Request.php";
require_once "Replace.php";

# CloudGate配置信息
$ModuleAPI  = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/Rule/';
$HostsAPI   = 'https://raw.githubusercontent.com/racaljk/hosts/master/hosts';
$ConfigFile = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/Module/Module';
$AutoURL    = 'http://www.gstatic.com/generate_204';
$HostsFix   = '219.76.4.3';
$Host       = 'https';
$SKIP       = '10.0.0.0/8, 17.0.0.0/8, 172.16.0.0/12, 192.168.0.0/16, localhost, *.local, *.crashlytics.com, *.epaylinks.cn';
$Bypass     = '10.0.0.0/8, 127.0.0.0/24, 172.0.0.0/8, 192.168.0.0/16';
$Cache      = '?Cache='.sha1(mt_rand()).'&TimeStamp='.time();

# ClouGate模块地址
$Potatso_Config_Module      = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Potatso_General.cfg';
$ABIGT_Config_Module        = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/A.BIG.T_General.cfg';
$Surge_Config_Module        = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Surge_General.cfg';
$Shadowrocket_Config_Module = 'https://raw.githubusercontent.com/BurpSuite/CloudGate-RuleList/master/General/Shadowrocket_General.cfg';

# CloudGate规则列表
!empty($_GET['List'])?$ModuleAPI=$_GET['List']:$ModuleAPI=$ModuleAPI;

# CloudGate模块列表
$RuleList = array(
    'Advanced'=>"{$ModuleAPI}Advanced{$Cache}",
    'Basic'=>"{$ModuleAPI}Basic{$Cache}",
    'DIRECT'=>"{$ModuleAPI}DIRECT{$Cache}",
    'Default'=>"{$ModuleAPI}Default{$Cache}",
    'Hosts'=>"{$HostsAPI}{$Cache}",
    'IPCIDR'=>"{$ModuleAPI}IPCIDR{$Cache}",
    'KEYWORD'=>"{$ModuleAPI}KEYWORD{$Cache}",
    'REJECT'=>"{$ModuleAPI}REJECT{$Cache}",
    'Rewrite'=>"{$ModuleAPI}Rewrite{$Cache}",
    'YouTube'=>"{$ModuleAPI}YouTube{$Cache}",
    'Other'=>"{$ModuleAPI}Other{$Cache}",
    'USERAGENT'=>"{$ModuleAPI}USERAGENT{$Cache}"
);

?>
