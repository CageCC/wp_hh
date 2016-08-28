## 服务器设置


### Fail2ban安装

rpm -Uvh http://dl.fedoraproject.org/pub/epel/7/x86_64/e/epel-release-7-8.noarch.rpm

yum install fail2ban

参考： http://www.centoscn.com/CentosSecurity/SoftSecurity/2015/0324/4996.html

 fail2ban常用命令
```

    查看SSH服务监护状态，能看到当前被禁IP。

    fail2ban-client status sshd
    在SSH监护服务忽略IP列表（白名单）中添加IP 192.168.111.111

    fail2ban-client set sshd addignoreip 192.168.111.111
    在SSH监护服务忽略IP列表（白名单）中删除IP 192.168.111.111

    fail2ban-client set sshd delignoreip 192.168.111.111
    查看fail2ban日志

    tail /var/log/fail2ban.log

```

### 安装APF

APF
```
APF的配置文件位于 /etc/apf/conf.apf。
```
常用命令：


```
apf -s   # 启动APF
apf -r   # 重启APF
apf -f   # 停止APF
apf -l   # 列出所有防火墙规则
apf -t   # 查看日志文件
apf -a <IP Address>   # 允许某个IP
apf -d <IP Address>   # 禁止某个IP
apf -o   # 列出所有可配置选项
apf --help # 查看帮助信息
```
### 系统加固
```
    26
    # 重启后生效
/sbin/sysctl -p 
sysctl -w net.ipv4.route.flush=1
```

http://linux.it.net.cn/m/view.php?aid=6613
