# 火币REST API请求库

## 验证环境信息

php-7.2.12-nts-Win32-VC15-x64

## 主程序demo.php

## lib.php 定义了一些示例方法, 其他方法参考地址: https://github.com/huobiapi/API_Docs/wiki/REST_api_reference

```
// 添加新方法需要定义的参数，API调试过程中有问题或者有疑问可反馈微信号shaoxiaofeng1118

// REST接口地址
$this->api_method = "/v1/...";
// REST请求方法 一般为GET或POST
$this->req_method = 'GET';
// 请求参数 根据文档要求定义
$postdata = [
	'parama' => '123'
];
// 参数配置完毕后调用create_sign_url方法生成验签URL 然后curl方法发起请求并获取返回值
$url = $this->create_sign_url();
$return = $this->curl($url,$postdata);
```
