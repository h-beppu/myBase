# myBase
vagrant + cakePHP (& Visual Studio) 基本形

# webapp開発環境の作成方法

リポジトリをダウンロード後
% vagrant up

sshログインする
% vagrant ssh

ミドルウェア類のセットアップ
% ansible-playbook /vagrant/ansible/main.yml -v --inventory-file=/etc/ansible/hosts --connection=local

% cd /vagrant/webapp
% composer install

一旦ログアウト
% exit

ホストOS側のコンソール(cmd, powershell等)からSSH トンネルを開く
% ssh -R 9001:localhost:9001 -i C:/vagrant/myBase/.vagrant/machines/default/virtualbox/private_key -p 2222 vagrant@127.0.0.1

# VisualStudioのPHPデバッグ設定
(プロジェクト]->[プロパティ]->
(Start URL)にhttp://192.168.33.10/debug_test.php
(Use Custom WebServer)にhttp://192.168.33.10/

(デバッグ)->(オプション)->(PHP Tools)->(Debug)->(Xdebug Debugger Port)に9001