
# HTTP状态码及其含义

	100 - 表示已收到请求的一部分，正在继续发送余下部分。
	101 - 切换协议。
	2xx - 成功。服务器成功地接受了客户端请求： 
	200 - 确定。客户端请求已成功。
	201 - 已创建。
	202 - 已接受。
	203 - 非权威性信息。
	204 - 无内容。
	205 - 重置内容。
	206 - 部分内容。
	300 - 针对收到请求，服务器可执行多种操作。
	301 - 永久移动转移，请求的内容已永久移动其他新位置。
	302 - 临时移动转移，请求的内容已临时移动新的位置。
	304 - 未修改。自从上次请求后，请求的内容未修改过。
	307 - 临时重定向。服务器目前从不同位置响应请求，但请求者应继续使用原有位置来进行以后的请求。
	400 - 错误的请求。
	401 - 访问被拒绝。IIS 定义了许多不同的 401 错误，它们指明更为具体的错误原因。这些具体的错误代码在浏览器中显示，但不在 IIS 日志中显示：
	401.1 - 登录失败。
	401.2 - 服务器配置导致登录失败。
	401.3 - 由于 ACL 对资源的限制而未获得授权。
	401.4 - 筛选器授权失败。
	401.5 - ISAPI/CGI 应用程序授权失败。
	401.7 - 访问被 Web 服务器上的 URL 授权策略拒绝。这个错误代码为 IIS 6.0 所专用。
	403 - 禁止访问：IIS 定义了许多不同的 403 错误，它们指明更为具体的错误原因：
		403.1 - 执行访问被禁止。
		403.2 - 读访问被禁止。
		403.3 - 写访问被禁止。
		403.4 - 要求 SSL。
		403.5 - 要求 SSL 128。
		403.6 - IP 地址被拒绝。
		403.7 - 要求客户端证书。
		403.8 - 站点访问被拒绝。
		403.9 - 用户数过多。
		403.10 - 配置无效。
		403.11 - 密码更改。
		403.12 - 拒绝访问映射表。
		403.13 - 客户端证书被吊销。
		403.14 - 拒绝目录列表。
		403.15 - 超出客户端访问许可。
		403.16 - 客户端证书不受信任或无效。
		403.17 - 客户端证书已过期或尚未生效。
		403.18 - 在当前的应用程序池中不能执行所请求的 URL.这个错误代码为 IIS 6.0 所专用。
		403.19 - 不能为这个应用程序池中的客户端执行 CGI.这个错误代码为 IIS 6.0 所专用。
		403.20 - Passport 登录失败。这个错误代码为 IIS 6.0 所专用。
	404 - 未找到请求的内容。
		404.0 - 未找到文件或目录。
		404.1 - 无法在所请求的端口上访问 Web站点。
		404.2 - Web 服务扩展锁定策略阻止本请求。
		404.3 - MIME 映射策略阻止本请求。
	405 - 用来访问本页面的 HTTP 谓词不被允许(方法不被允许) 。
	406 - 客户端浏览器不接受所请求页面的 MIME 类型。
	407 - 要求进行代理身份验证。
	412 - 前提条件失败。
	413 - 请求实体太大。
	414 - 请求 URI 太长。
	415 - 不支持的媒体类型。
	416 - 所请求的范围无法满足。
	417 - 执行失败。
	423 - 锁定的错误。
	500 - 服务器内部错误。
		500.12 - 应用程序正忙于在 Web 服务器上重新启动。
		500.13 - Web 服务器太忙。
		500.15 - 不允许直接请求 Global.asa。
		500.16 - UNC 授权凭据不正确。这个错误代码为 IIS 6.0 所专用。
		500.18 - URL 授权存储不能打开。这个错误代码为 IIS 6.0 所专用。
		500.100 - 内部 ASP 错误。
	501 - 服务器无法完成请求的功能。
	502 - 服务器用作网关或代理服务器时收到了无效响应。
		502.1 - CGI 应用程序超时。
		502.2 - CGI 应用程序出错。
	503 - 服务不可用。这个错误代码为 IIS 6.0 所专用。
	504 - 网关超时。
	505 - HTTP 版本不受支持




