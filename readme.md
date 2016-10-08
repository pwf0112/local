# 收银机维护档案管理系统

---

## 项目Clone和安装

1. 使用 `git clone https://github.com/pwf0112/local.git`指令克隆Git项目
2. 将*.env.example*另存为*.env*,并参照*.env.example*配置本地环境
3. 执行`composer install`指令，进行第三方类库依赖下载
4. 运行 `php artisan key:generate` 指令，生成项目的key值

## Git分支管理

1. Origin版本库创建master和develop(dev)两个常设分支
2. 辅助性分支包括feature（功能）、release（预发布）和hotfix（修复）分支
3. 辅助性分支格式为`feature-<辅助性分支名>`,如 feature-login