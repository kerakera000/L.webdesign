# Docker と docker-compose をインストールする

Docker と docker-compose のインストールについて解説しています。
Mac/Windows(Windows10 Pro)/Windows(Windows10 Home)/Linux でそれぞれ方法が異なるため注意してください。

## Mac

ターミナルを開き以下のコマンドをそれぞれ実行してください。

1. Home brew が入っていない場合はインストールします。

```bash
$ /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
```

2. docker と docker-compose をインストールします。

```bash
$ brew install docker
$ brew cask install docker
$ brew install docker-compose
```

3. docker と docker-compose をインストールできたことを確認します。

```
$ docker -v
Docker version xx.xx.xx, build xxxxxxxxxx

$ docker-compose -v
docker-compose version x.xx.xx, build xxxxxxxxxx
```
