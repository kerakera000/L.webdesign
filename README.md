# Wordpress Template Project

## 概要

Wordpress を用いた Web 制作案件用のテンプレートです。
Wordpress に係る以下の作業を自動化する機能を持ちます。

-   新規案件開発用のテンプレートソースコード
-   Docker/docker-compose を用いた開発用 Wordpress の構築
-   開発用 Wordpress への開発プロジェクトテーマの読み込み
-   納品用 zip ファイル生成スクリプト

## 使い方

このテンプレートを利用するには docker と docker-compose が必要です。
未インストールの場合には[インストール方法](./docs/docker.md)を参考にインストールしてください。

1. テンプレートプロジェクトのリポジトリから新たなプロジェクトのリポジトリを作成します。
2. 作成したリポジトリの URL からリポジトリ名(TEMPLATE_NAME) を確認します。

    `(例: https://github.com/WillMake-Inc/2020_xx_xx_案件名 => 2020_xx_xx_案件名)`

3. 作成したプロジェクトを clone します。

```
$ git clone https://github.com/WillMake-Inc/$TEMPLATE_NAME(例: 2020_xx_xx_案件名).git
$ cd $TEMPLATE_NAME(例: 2020_xx_xx_案件名)
```

3. 開発用 Wordpress を立ち上げます。

```
$ docker-compose up -d
```

4. VisualStudioCode でプロジェクトを開き、以下を変更します。

-   `src/style.scss` コメントアウトの中身を新規プロジェクトに即するように変更します。
-   VisualStudioCode 右下の Watch CSS をクリックし、scss を css に変換します。

5. 開発用 Wordpress にブラウザでアクセスします。

-   [開発用 Wordpress](http://127.0.0.1)

5. 初期設定を完了します。

6. ダッシュボード画面左メニューより外観 => テーマを選択します。

7. プロジェクトのテーマをクリックしてテーマを適用します。

## ディレクトリ構成について

本リポジトリのディレクトリ構成は以下のようになっています。

それぞれの役割に沿ったディレクトリにファイルを適切に配置して実装を進めてください。

```
.
├── README.md # 本ファイルです。 開発時には編集することはありません。
├── attachments # ContactForm7のテキストなど、案件毎に共有の必要があるファイルを保存するディレクトリです。
├── docker-compose.yml # 開発用WordPressを構築するためのdocker-composeファイルです。 開発時には編集することはありません。
├── docs #ドキュメント類を格納します。開発時には編集することはありません。(別リポジトリに移動予定)
│   ├── docker.md
│   ├── rules.md
│   └── vscode.md
├── generate_zip.sh # 納品用テーマzipファイルを生成するスクリプトです。 開発時には編集することはありません。
├── materials # 開発に使用する、クライアントから受け取ったpdfや素材ファイル等を配置します。基本的にシングルリポジトリで誰もが作業できるよう、受け取ったファイルはここに保存してください。
├── src # テーマの本体となるディレクトリです。
│   ├── fonts # フォントを使用する場合このディレクトリに含めてください。
│   ├── footer.php 
│   ├── functions.php
│   ├── header.php
│   ├── img # 画像を使用する場合このディレクトリに含めてください。
│   ├── index.php
│   ├── js # JavaScriptを使用する場合このディレクトリに含めてください。
│   │   └── main.js
│   ├── sidebar.php
│   ├── style.css
│   ├── style.css.map
│   └── style.scss
└── types # JavaScript開発時に型定義ファイルを使用したい場合ここに含めてください。
    └── jquery.d.ts
```

## 開発について

使い方の手順を実施後、`src`ディレクトリ化がテーマを構成するファイルとなります。

[開発ルール](./docs/rules.md)を熟読の上、開発を進めてください。

## 納品ファイルの作り方

納品はテーマのディレクトリ`src`をzip化して納品します。
通常の方法でzip化するとzipファイル内に子ディレクトリが作成されてしまうため、以下のコマンドを用いて作成します。

```
$ generate_zip.sh 作成したいファイル名
# 例
$ generate_zip.sh BeautyWater
```

上記の例では同一ディレクトリにBeautyWater.zipが出力されているため、ステージング環境にインポートし問題が無いことを確認した上で納品してください。

